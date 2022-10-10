<!-- <button id="cekarrayTrack">cek marker tracking</button> -->
<div class="row">
    <div class="col-md-12"> 

    <!-- <a href='#' id='export'>Export Features</a> -->
        <div style="top: 50px;right: 10px;position: relative;z-index: 999;text-align: end;"> 
           
        </div>
        <div style="display:flex;z-index: 999;position: absolute;">
            <div class="dropdown d-inline-block">
                <div style="cursor: pointer; display:flex; width:260px; height:40px; background-color:white; border-radius:0.25rem;margin: 10px;border: 1px solid var(--bs-input-border);" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div>
                        <div class="row" style="margin-left: 0px;"> 
                            <div class="col-md-12">
                                <div style="display: flex;">
                                    <i class="fa fa-fw fas fa-align-justify" style="margin: 10px;z-index: 9;"></i>
                                    <input type="text" placeholder="Telusuri Peta" name="searchAlamat" style="height: 38px;border: none;margin-left: -47px;width: 260px;padding-left: 50px;"> 
                                    <i class="fa fa-fw fas fa-search" style="margin: 10px;z-index: 9;margin-left: -30px;"></i>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="btn" style="color: #495057; margin-left: 10px; background-color: #fff;width: 40px;font-size: 15px;" data-bs-toggle="modal" data-bs-target="#myModalFilter">
                        <i style="margin-left: -2px;" class="fa fa-fw fas fa-filter"></i>
                    </a> 
                    <div id="listAddress" style="margin-left: 10px;"></div>
                </div>
                
                
                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                    <div style="width: 308px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: 0px;">
                        <div style="margin-left: 0px;overflow-x: scroll;height: 435px;scrollbar-width: thin;position: relative; padding: 15px;">
                            <form class="form" method="POST" enctype="multipart/form-data"> 
                                <div class="row">
                                    <label for="waktu">Tanggal</label>
                                    <div class="col-md-12" style="display: flex;">  
                                        <input required class="form-control" type="date" id="startdate" name="startdate"> &nbsp;&nbsp;<span style="margin-top: 7px;">To</span>&nbsp;&nbsp;
                                        <input required class="form-control" type="date" id="enddate" name="enddate"> 
                                    </div>  
                                    <div class="dropdown-divider"></div>

                                    <div class="col-md-12 mt-1">
                                        <p style="font-size: 17px;">OPERASI</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox"  name="filter" value="polres" id="polres" class="form-input" >  
                                        <span>Polres</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="instruksi" id="instruksi" class="form-input" >  
                                        <span>Instruksi</span> 
                                    </div>  
                                    <div class="col-md-6">
                                        <input type="checkbox" checked name="filter" value="turjawali" id="turjawali" class="form-input" >  
                                        <span>Turjawali</span> 
                                    </div>  
                                    <div class="col-md-6">
                                        <input type="checkbox"  name="filter" value="jadwal_kegiatan" id="jadwal" class="form-input" >  
                                        <span>Jadwal Kegiatan</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="vip" id="vip" class="form-input" >  
                                        <span>VIP</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input type="checkbox" checked name="filter" value="cctv" id="cctv" class="form-input" >  
                                        <span>CCTV</span> 
                                    </div>  
    
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-12">
                                        <p style="font-size: 17px;">Laporan</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="titik_panicButton" id="panic" class="form-input" >  
                                        <span>Panic Button</span> 
                                    </div>   
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="titik_laporan" id="operasi" class="form-input" >  
                                        <span>Operasi</span> 
                                    </div>   
    
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-12 ">
                                        <p style="font-size: 17px;">Location Of Interest</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="fasum" id="fasum" class="form-input" >  
                                        <span>Fasilitas Umum</span> 
                                    </div>  
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="fasum_khusus" id="fasum_khusus" class="form-input" >  
                                        <span>Fasilitas Khusus</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="troublespot" id="troublespot" class="form-input" >  
                                        <span>Trouble Spot</span> 
                                    </div>   
                                    <div class="col-md-12 mt-3" id="menuKategori">
                                        <p style="font-size: 17px;">Fasilitas Umum Kategori</p> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="mosque" id="mosque" class="form-input" >  
                                                <span>mosque</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="school" id="school" class="form-input" >  
                                                <span>School</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="cafe" id="cafe" class="form-input" >  
                                                <span>Cafe</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="hospital" id="hospital" class="form-input" >  
                                                <span>Hospital</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="lodging" id="lodging" class="form-input" >  
                                                <span>Lodging</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="restaurant" id="restaurant" class="form-input" >  
                                                <span>Restaurant</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="tourist_attraction" id="tourist_attraction" class="form-input" >  
                                                <span>Tourist Attraction</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="fire_station" id="fire_station" class="form-input" >  
                                                <span>Fire Station</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="shopping_mall" id="shopping_mall" class="form-input" >  
                                                <span>Shopping Mall</span> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="checkbox" checked name="filterFasumKateg" value="gas_station" id="gas_station" class="form-input" >  
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

                <div class="cat fasumKhususDisplay" style="margin-left: 10px;">
                    <label>
                        <input type="checkbox" value="fasum_khusus" name="filter" id="fasumKhususDisplay"><span><i class="mdi mdi-account-group"></i> Fasum Khusus</span>
                    </label>
                </div>

                <div class="cat panicDisplay">
                    <label>
                        <input type="checkbox" value="titik_panicButton" name="filter" id="panicDisplay"><span><i class="mdi mdi-chat-alert"></i> Panic Button</span>
                    </label>
                </div>

                <div class="cat operasiDisplay">
                    <label>
                        <input type="checkbox" value="titik_laporan" name="filter" id="operasiDisplay"><span><i class="mdi mdi-clipboard-flow"></i> Operasi</span>
                    </label>
                </div>

                <div class="cat cctvDisplay">
                    <label>
                        <input type="checkbox" checked value="cctv" name="filter" id="cctvDisplay"><span><i class="mdi mdi-camera-marker"></i> CCTV</span>
                    </label>
                </div>

                <div class="cat kegiatanDisplay">
                    <label>
                        <input type="checkbox" value="jadwal_kegiatan" name="filter" id="kegiatanDisplay"><span><i class="mdi mdi-card-account-details-star"></i> Jadwal Kegiatan</span>
                    </label>
                </div>
                
            </div>  
        </div>
        <div id="mapG20Dashboard"></div>
    </div>
    <div class="col-md-12 mt-3"> 
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Waktu Mulai</th>
                            <th>Nama Tim</th>
                            <th>Unit Pengawalan</th>
                            <th>Penugasan</th>
                            <th>Delegasi</th>
                            <th>Subjek</th>
                            <!-- <th>Waktu</th> -->
                            <th>Jarak Tempuh</th> 
                            <th>Waktu Tempuh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

 
<!-- Modal -->
<div class="modal right fade" id="myModalFilter" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    
        <!-- Modal content-->
        <div class="modal-content" style="width: 350px;">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="myLargeModalLabel">Filters Map</h4>
                <button type="button" class="btn-close btn-close-white" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item" id="jadwalKegiatan">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                Jadwal Kegiatan &nbsp;<span class="badge bg-danger rounded-pill" id="totalKegiatanOn"></span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="list-group" id="listJadwal"> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Rencana Pengamanan &nbsp;<span class="badge bg-danger rounded-pill" id="totalRenpamOn"></span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted">
                                <div class="row"> 
                                    <div class="col-md-12 mb-3">
                                        <select name="filterTypeRenpam" id="filterTypeRenpam" class="form-control">
                                            <option selected value="">Semua Subjek</option> 
                                            <option value="1">Patroli</option> 
                                            <option value="2">Pengawalan</option> 
                                            <option value="3">Penjagaan</option> 
                                            <option value="4">Pengaturan</option> 
                                            <option value="5">Penutupan</option>
                                        </select>
                                        <!-- <input hidden type="text" placeholder="Cari Renpam.." id="searchRenpam"> -->
                                    </div> 
                                    <div class="list col-md-12 mb-3">
                                        <ul class="list-group" id="listRenpam" style="height: 400px;overflow-y: auto;scrollbar-width: thin;"> 
                                        </ul>
                                    </div> 
                                    <!-- <div class="col-md-12">
                                        <input hidden type="text" name="halaman" id="halaman" value="1">
                                        <nav aria-label="Page navigation example" style="position: inherit;float: inline-end;">
                                            <ul class="pagination">
                                                <li class="page-item" id="backHalaman"><a class="page-link" href="javascript:void(0);">Kembali</a></li> 
                                                <li class="page-item" id="nextHalaman" ><a class="page-link" href="javascript:void(0);">Selanjutnya</a></li>
                                            </ul>
                                        </nav>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                Petugas &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasOn"></span>
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-muted">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="list-group" id="listPetugas"> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div> 
                </div><!-- end accordion -->
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
                                    <?php foreach($data['getAccount'] as $row): ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name_account'];?></option> 
                                    <?php endforeach; ?> 
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Unit Pengawalan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date" >
                                <label class="labelmui">Tanggal</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="id_vip[]" id="id_vip" style="height: 200px" multiple> 
                                    <?php foreach($data['getVip'] as $row): ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name_vip'];?>  ( <?= $row['country_arrival_vip']?> )</option> 
                                    <?php endforeach; ?> 
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VIP</label>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
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
                                <input  style="width: 100%;" name="total_vehicle" placeholder="" type="text">
                                <label class="labelmui">Jumlah kendaraan yang dikawal</label>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
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
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input  type="text" name="note_kakor" class="form-control" id="note_kakor"> 
                                <label class="labelmui">Instruksi Kakor</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i')?>" data-default="<?php echo date('H:i')?>"> 
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

                <div class="col-md-6 mt-3 float-end" >
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

                <div class="col-md-6 mt-3 float-end" >
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
                <h5 class="modal-title text-white" id="myLargeModalLabelNoteKakor">Tambah Instruksi Kakor</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                <form class="formNoteKakor" method="post" enctype="multipart/form-data"> 
                    
                    <div class="row">   
                        <textarea hidden name="accountsNoteKakor" id="accountsNoteKakor" cols="5" rows="5"></textarea>
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input hidden style="width: 100%;" name="id" id="idNoteKakor" placeholder="" type="text">
                                <input required style="width: 100%;" name="note_kakor" id="noteKakor" placeholder="" type="text">
                                <label class="labelmui">Instruksi Kakor</label>
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
  

<script src="https://cdn.socket.io/3.1.3/socket.io.min.js"></script>
<script>
    $(function() {

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D') + ' - ' + end.format('MMMM D')); 
            $('#startdate').val(start.format('YYYY-MM-DD'));
            $('#enddate').val(end.format('YYYY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Hari Ini': [moment(), moment()],
            'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            '7 Hari Kemarin': [moment().subtract(6, 'days'), moment()],
            '30 Hari Kemarin': [moment().subtract(29, 'days'), moment()],
            'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
            'Bulan Kemarin': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')], 
            'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
            'Tahun Lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
            }
        }, cb);

        cb(start, end);     

    });


    let app_url = '<%-app_url%>' 
    let path = '<%-path%>'
    
    let data = [];  
    let connected = false; 
    var socket = io('http://k3ig20korlantas.id:3001/', {
    // query: {
    //     token: "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOiJWVEpHYzJSSFZtdFlNU3RWTDJodWIxRnFjbFZMZW5wUmNHcEdUSGRIUzJnMVptMWlUelowYmtGV1JUMCIsIm5ycF91c2VyIjoiVlRKR2MyUkhWbXRZTVRoNmVIVnhNWFZ5TkcxRk1XdFZZa1ZKTkRCVWNWQjNUakJZWWs4M1NWbHZkejAiLCJvZmZpY2VyIjoiVlRKR2MyUkhWbXRZTVN0VFQwYzRNVzh3UVhOamNtWkNMeXQyTmxSdVlsaE1SRm94Umpodk9XTnVhejAiLCJ0aW1lc3RhbXAiOjE2NjA5ODc0NDksImlhdCI6MTY2MDk4NzQ0OSwiZXhwIjoxNjYwOTkxMDQ5LCJhdWQiOiJHMjAiLCJpc3MiOiJLb3JsYW50YXNQb2xyaSIsInN1YiI6IkszSUcyMCJ9.vapdm1lwH-ifw72nfFtCE39XmNFg0N46CvaDFvafp-A2jidKC2_Nn_rwZCTy_I5BI3Usb1028Bwx6kZbXg3WoQ",
    //     user_nrp: "3232912480",
    //     type: "operator", //['admin', 'kakor', 'operator'],
    // }
        query: {
        
            username: "Kakor",
            password: "a",
            
            type: "Admin"
        }
    });
    console.log(socket);
    var markerArray = new Array();
    var markerJadwal = new Array();
    var markerCCTV = new Array();
    var markerLaporanPanic = new Array();
    var markerLaporan = new Array(); 
    var markerFasum = new Array();
    var markerFasumKhusus = new Array();
    var markerPolres = new Array();
    var routingJadwal = new Array();
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

    $(document).ready(function() { 
        // alert('oke');
        
        // var arrayContoh = [ 
        //     {-8.551740, 115.077643},
        //     {-8.451740, 115.089643},
        //     {-8.458519301130188,115.14931575647383},
        //     {-8.452198812821242,115.09396433830263},
        //     {-8.5068977,115.2622931},
        // ];  


        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function(settings, json) {},

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>dashboard/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    data.filterTgl = $('#startdate').val();

                    data.filterTgl2 = $('#enddate').val();

                    // data.filterStatus = $('[name=status]').val();

                    data.filterSchedule = '';

                    data.filterTypeRenpam = '';

                    data.filterCategoryRenpam = '';

                    // data.filterPhone = $('[name=poc_phone]').val();

                    // data.filterThreat = $('[name=threat_level]').val();

                    data.orderField = data.order[0] != undefined ? data.order[0].column : '';

                    data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

                    data.page = Number(data.start / data.length) + 1

                },

                beforeSend: function(xhr, settings) {

                },

                "dataSrc": function(result) {

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [

                {
                    data: 'id'
                },
                {
                    data: 'date'
                },
                {
                    data: 'waktu'
                },
                {
                    data: 'nama_tim',
                    orderable: false
                },
                {
                    data: 'accounts',
                    orderable: false
                },
                {
                    data: 'name_renpam'
                },
                {
                    data: 'vips',
                    orderable: false
                },
                {
                    data: 'type_renpam'
                },
                {
                    data: 'estimasi',
                }, 
                
                {
                    data: 'estimasi_time',
                }, 

                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "DESC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);
                client();
            }

        });


        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
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

        // StART MAP SECTION
        var mapContainer = L.map('mapG20Dashboard', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleHybrid]
        }).setView(initialCenter, initialZoom); 

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
        };
        var overlayMaps = {};
        L.control.layers(baseMaps, overlayMaps, {
            position: 'topright'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'topright'
        }).addTo(mapContainer);
        
        mapContainer.doubleClickZoom.disable();
    
        socket.on("connected", function(resSocket){
            console.log(socket.id);
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
                $('html, body').animate({scrollTop:0}, '300');
                // alert($(this).data("lat"));
            });
        }


        $("[name=searchAlamat]").on("change", function (e) {
            $('#listAddress').show();
            // console.log(this.value);
            $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress){
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
                

                if(list == ""){
                    countlist = 0;
                    list = "";
                    $('#listAddress').html(list); 
                }

                
                for (let i = 0; i < ress.length; i++){ 
                    $(`#list${i+1}`).click(function(){  
                        var latlong =  $(this).data('cords').split(',');
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


        function serverSideGet(){
            $("#overlay").fadeIn(300);   

            
            let countlist = 0;
            let list = ""; 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>dashboard/getTracking", 
                data : {
                    "status" : '1',
                }, 
                dataType : "JSON",
                success : function(result){  
                    $("#overlay").fadeOut(300); 
                    let ress = result['data']; 
                    // console.log(result['data']);
                    // console.log('get Controller');

                    if (ress.length > 0) {    
                        for (let i = 0; i < ress.length; i++) {  

                            var jenis = '';
                            if(ress[i].type_vehicle == 'Sepeda Motor'){
                                // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                                jenis = `<img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -10px;margin-left: -10px;">`;
                            }else if(ress[i].type_vehicle == 'Mobil'){
                                jenis = `<img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -10px;margin-left: -10px;">`;
                            }else{
                                // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                                jenis = `<img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -10px;margin-left: -10px;">`;
                            }

                            var cordLat = parseFloat(ress[i].latitude); 
                            var corLong = parseFloat(ress[i].longitude); 
                            var lokasiPetugas = '';
                            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
                                // $('[name=address]').val(data['display_name']); 
                                // mapContainer.flyTo([cordLat, corLong], 17);  
                                lokasiPetugas = data['display_name'];
                                if(markerArray[ress[i].id_officer] != null){ 
                                    markerArray[ress[i].id_officer].setLatLng([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: jenis,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                        }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 110px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                                    </div>
    
                                                    ${call_wa_dan_biasa(ress[i].handphone)}
                                                </div> 
    
                                                <div class="row text-start mt-3">
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].rank_officer} - ${ress[i].name_officer}</span>
                                                    </div> 
    
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">NRP</span>  
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].nrp_user}</span>
                                                    </div>  
                                                    
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">Tim</span>  
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].name_account}</span>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">Ketua Tim</span>  
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].name_team}</span>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">Jenis Kendaraan</span>  
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].type_vehicle} / ${ress[i].fuel_vehicle == null ? '' : ress[i].fuel_vehicle}</span>
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">Nomor Polisi</span>  
                                                    </div>
                                                    <div class="col-md-8">
                                                        <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].no_vehicle} / ${ress[i].back_number_vehicle == null ? '' : ress[i].back_number_vehicle}</span>
                                                    </div>
    
                                                    <div class="col-md-4">
                                                        <span style="font-size: 12px;font-weight: bold;">Lokasi Petugas</span>  
                                                    </div> 
                                                    <div class="col-md-1">
                                                        <span style="font-size: 12px;font-weight: bold;">: &nbsp;&nbsp;&nbsp;</span>  
                                                    </div>
                                                    <div class="col-md-7">
                                                        <span style="font-size: 12px;">${lokasiPetugas}</span>
                                                    </div>
                                                </div> 
                                            </div>  
                                        </div>
                                    `).update();  
                                }else{ 
                                    markerArray[ress[i].id_officer] = L.marker([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: jenis,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                        }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 110px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                                    </div>
                                                </div> 
    
                                                ${call_wa_dan_biasa(ress[i].handphone)}
                                            </div>
    
                                            
                                            <div class="row text-start mt-3">
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].name_officer}</span>
                                                </div> 
    
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">NRP</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].nrp_user}</span>
                                                </div>
                                                
                                               
    
                                                
                                                
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Tim</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].name_account}</span>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Ketua Tim</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].name_team}</span>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Kendaraan</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].type_vehicle} / ${ress[i].fuel_vehicle == null ? '' : ress[i].fuel_vehicle}</span>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">No Kendaraan</span>  
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress[i].no_vehicle} / ${ress[i].back_number_vehicle == null ? '' : ress[i].back_number_vehicle}</span>
                                                </div>
    
                                                <div class="col-md-4">
                                                    <span style="font-size: 12px;font-weight: bold;">Lokasi Petugas</span>  
                                                </div>
                                                <div class="col-md-1">
                                                    <span style="font-size: 12px;font-weight: bold;">: &nbsp;&nbsp;&nbsp;</span>  
                                                </div>
                                                <div class="col-md-7">
                                                    <span style="font-size: 12px;">${lokasiPetugas}</span>
                                                </div>
                                            </div> 
                                              
                                        </div>
                                    `).addTo(mapContainer);    
                                }
                            }); 
                             
                        
                        }


                        
                        countlist = 0;
                        list = "";
                        sortRess = ress.sort((a,b) => a.name_officer + b.name_officer);
                        
                        $("#totalPetugasOn").html(`${sortRess.length}`);
                        sortRess.forEach(el => { 
                            countlist += 1;
                            list += `
                            <div class="list-group-item text-start">
                                <div class="row">
                                    <div class="col-md-6">

                                        ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer} 
                                    </div>
                                    <div class="col-md-6">
                                        <div style="display: flex;">
                                            <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                            
                                            <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank"><i class="fa  fas fa-video "></i></a> 
                                            <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                id="listPetugasClick${countlist}"   
                                                data-nama="${el.name_team}"  
                                                data-akun="${el.name_account}" 
                                                data-nrp="${el.nrp_user}"
                                                data-telp="${el.handphone}"
                                                data-cord="${el.latitude},${el.longitude}" >
                                                <i style="color: #495057;" class="fa fas fa-eye"></i>
                                            </button>
                                            <div class="switch" style="margin-left: -11px;">
                                                <input class="flag" type="checkbox" id="flag${countlist}" 
                                                data-id="${el.id_officer}"  
                                                data-nama="${el.name_team}"  
                                                data-akun="${el.name_account}" 
                                                data-nrp="${el.nrp_user}"
                                                data-telp="${el.handphone}"
                                                data-cord="${el.latitude},${el.longitude}"
                                                data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                <label for="flag${countlist}"></label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                
                            </div>
                            `;
                            $('#listPetugas').html(list); 
                        });  

                        
                        for (let i = 0; i < ress.length; i++){ 
                            $(`#listPetugasClick${i+1}`).click(function(){   
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]); 
                                mapContainer.flyTo([latitude, longitude], 17);    
                            });

                            $(`#flag${i+1}`).on("change", function (e) {
                                // alert($(this).data('id'));
                                if($(`#flag${i+1}`).is(':checked')){
                                    mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClick${i+1}`).hide();
                                }else{
                                    mapContainer.addLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClick${i+1}`).show();
                                }
                            });

                            // $(`#listPetugasIncognito${i+1}`).click(function(){   
                            //     console.log(markerArray[$(this).data('id')]);
                            //     mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                            // }); 
                        } 

                    }else{ 
                        $("#overlay").fadeOut(300);  
                    } 
                },
                error: function () { 
                    $("#overlay").fadeOut(300);  
                    console.log("gagal connect");
                } 
            }); 
            
        }

        const call_wa_dan_biasa = (noTelp) => {
            // let castNoTelp = noTelp.sub
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
                </div>
            `
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

        socket.on('from server', function(ress) { 
            console.log('ido2'); 
            console.log(ress) 

            // for (let i = 0; i < ress.length; i++) {  
                if(markerArray[ress.id_officer] != null){ 
                markerArray[ress.id_officer].setLatLng([ress.latitude,ress.longitude], { icon: L.divIcon({
                    className: 'location-pin',
                    html: `<img src="-"><div class="pin"></div><div class="pulse"></div>`,
                    iconSize: [30, 30],
                    //iconAnchor: [18, 30]
                    iconAnchor: [10, 33]
                    }) }).bindPopup(`
                    <div class="text-center" style="width: 300px;">
                        <div class="card-block">
                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                <img src="-" alt="Logo">
                            </a>
                            <h4 class="profile-user">-</h4>
                            <h5 class="profile-user">-</h5>
                        </div> 
                    </div>
                `).update();  
                }else{ 
                markerArray[ress.id_officer] = L.marker([ress.latitude,ress.longitude], { icon: L.divIcon({
                    className: 'location-pin',
                    html: `<img src="-"><div class="pin"></div><div class="pulse"></div>`,
                    iconSize: [30, 30],
                    //iconAnchor: [18, 30]
                    iconAnchor: [10, 33]
                    }) }).bindPopup(`
                    <div class="text-center" style="width: 300px;">
                        <div class="card-block">
                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                <img src="-" alt="Logo">
                            </a>
                            <h4 class="profile-user">-</h4>
                            <h5 class="profile-user">-</h5>
                        </div> 
                    </div>
                `).addTo(mapContainer);    
                }
            // }
        }) 
        socket.on('sendToAdminMobile', function(ress) { 
            // console.log('ido3');
            // console.log(ress); 


        
            // for (let i = 0; i < ress.length; i++) {  

                var jenis = '';
                if(ress.type_vehicle == 'Sepeda Motor'){
                    // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                    jenis = `<img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -10px;margin-left: -10px;">`;
                }else if(ress.type_vehicle == 'Mobil'){
                    jenis = `<img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -10px;margin-left: -10px;">`;
                }else{
                    // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                    jenis = `<img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -10px;margin-left: -10px;">`;
                }
    
                var lokasiPetugas = '';
                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
                
                    lokasiPetugas = data['display_name'];
                    if(markerArray[ress.id_officer] != null){ 
                        markerArray[ress.id_officer].setLatLng([ress.latitude,ress.longitude], { icon: L.divIcon({
                            //   className: 'location-pin',
                            html: jenis,
                            iconSize: [5, 5],
                            iconAnchor: [5, 10]
                            // iconAnchor: [10, 33]
                            }) }).bindPopup(`
                            <div class="text-center" style="width: 300px;"> 
                                <div class="row mt-3">
                                    <div class="col-md-12 col-12" style="margin-left: 110px;">
                                        <div class="avatar-xl me-3">
                                            <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                        </div>
                                    </div> 
                                    ${call_wa_dan_biasa(ress.handphone)}
                                </div>
    
    
                                    <div class="row text-start mt-3">
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.rank_officer} - ${ress.name_officer}</span>
                                        </div> 
    
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">NRP</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.nrp_user}</span>
                                        </div>
                                        
                                        
        
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Tim</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.name_account}</span>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Ketua Tim</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.name_team}</span>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Jenis Kendaraan</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.type_vehicle} / ${ress.fuel_vehicle == null ? '' : ress.fuel_vehicle}</span>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Nomor Polisi</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.no_vehicle} / ${ress.back_number_vehicle == null ? '' : ress.back_number_vehicle}</span>
                                        </div>

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Lokasi Petugas</span>  
                                        </div>
                                        <div class="col-md-1">
                                            <span style="font-size: 12px;font-weight: bold;">: &nbsp;&nbsp;&nbsp;</span>  
                                        </div>
                                        <div class="col-md-7">
                                            <span style="font-size: 12px;">${lokasiPetugas}</span>
                                        </div>
                                    </div>  
                                
                            </div>
                        `).update();  
                    }else{ 
                        markerArray[ress.id_officer] = L.marker([ress.latitude,ress.longitude], { icon: L.divIcon({
                            //   className: 'location-pin',
                            html: jenis,
                            iconSize: [5, 5],
                            iconAnchor: [5, 10]
                            // iconAnchor: [10, 33]
                            }) }).bindPopup(`
                            <div class="text-center" style="width: 300px;"> 
                                <div class="row mt-3">
                                    <div class="col-md-12 col-12" style="margin-left: 110px;">
                                        <div class="avatar-xl me-3">
                                            <img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">
                                        </div>
                                    </div> 
                                    ${call_wa_dan_biasa(ress.handphone)}
                                </div>
    
    
                                    <div class="row text-start mt-3">
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.name_officer}</span>
                                        </div> 
    
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">NRP</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.nrp_user}</span>
                                        </div>
                                        
                                        
        
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Tim</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.name_account}</span>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Ketua Tim</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.name_team}</span>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Kendaraan</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.type_vehicle} / ${ress.fuel_vehicle == null ? '' : ress.fuel_vehicle}</span>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">No Kendaraan</span>  
                                        </div>
                                        <div class="col-md-8">
                                            <span style="font-size: 12px;">: &nbsp;&nbsp;&nbsp;${ress.no_vehicle} / ${ress.back_number_vehicle == null ? '' : ress.back_number_vehicle}</span>
                                        </div>

                                        <div class="col-md-4">
                                            <span style="font-size: 12px;font-weight: bold;">Lokasi Petugas</span>  
                                        </div> 
                                        <div class="col-md-1">
                                            <span style="font-size: 12px;font-weight: bold;">: &nbsp;&nbsp;&nbsp;</span>  
                                        </div>
                                        <div class="col-md-7">
                                            <span style="font-size: 12px;">${lokasiPetugas}</span>
                                        </div>
                                    </div>  
                                
                            </div>
                        `).addTo(mapContainer);    
                    }
                });
            

            // } 
        });

        var centerMap = mapContainer.getCenter();
        var centerLat = centerMap['lat'];
        var centerLng = centerMap['lng'];  


        
        serverSideGet();
        
        serverSideFilter();  
        // serverSideGetJadwal();
        // serverSideGetCCTV(); 
        // serverSideGetFasum();
        // serverSideGetPolres();

        mapContainer.on('dragend',function(e){ 
            var ada = mapContainer.getCenter();
            centerLat = ada['lat'];
            centerLng = ada['lng'];   
            if($('#fasum').is(':checked')){ 
                serverSideFilter();
            }
        });

        $("#menuKategori").hide();
        $("#fasum").on("change", function (e) {
            if($('#fasum').is(':checked')){
                $("#menuKategori").show();
            }else{
                $("#menuKategori").hide();
            }
        });


        cctvClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({ html: `
                    <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#d3a53a;text-align: center;margin-top: -1px;margin-left: -1px;">
                    <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-cctv"></i>${cluster.getChildCount()}</b>
                    </div>` 
                });
            }
        });
        jadwalClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({ html: `
                    <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#c41f30;text-align: center;margin-top: -1px;margin-left: -1px;">
                    <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-card-account-details-star"></i>${cluster.getChildCount()}</b>
                    </div>` 
                });
            }
        });
        laporanClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({ html: `
                    <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#049901;text-align: center;margin-top: -1px;margin-left: -1px;">
                    <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-clipboard-flow"></i>${cluster.getChildCount()}</b>
                    </div>` 
                });
            }
        });
        panicClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({ html: `
                    <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#a50000;text-align: center;margin-top: -1px;margin-left: -1px;">
                    <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-chat-alert"></i>${cluster.getChildCount()}</b>
                    </div>` 
                });
            }
        }); 
        fasumKhususClusterGroup = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({ html: `
                    <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#000;text-align: center;margin-top: -1px;margin-left: -1px;">
                    <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="mdi mdi-account-group"></i>${cluster.getChildCount()}</b>
                    </div>` 
                });
            }
        });

        function serverSideFilter(){
            userDataTable.draw();

            $("#overlay").fadeIn(300);   
            arrayFilter = [];
            $("input:checkbox[name=filter]:checked").each(function(){
                arrayFilter.push($(this).val());
            });  
            console.log(arrayFilter);

            arrayFilterFasumKategori = [];
            $("input:checkbox[name=filterFasumKateg]:checked").each(function(){
                arrayFilterFasumKategori.push($(this).val());
            });  


            for (let i = 0; i < markerJadwal.length; i++) { 
                mapContainer.removeLayer(markerJadwal[i]);
                mapContainer.removeLayer(jadwalClusterGroup);
            }
            markerJadwal = new Array();

            for (let i = 0; i < markerCCTV.length; i++) { 
                mapContainer.removeLayer(markerCCTV[i]);
                mapContainer.removeLayer(cctvClusterGroup);
            } 
            markerCCTV = new Array();  

            for (let i = 0; i < markerFasum.length; i++) { 
                mapContainer.removeLayer(markerFasum[i]);
            }
            markerFasum = new Array(); 
            
            for (let i = 0; i < markerFasumKhusus.length; i++) { 
                mapContainer.removeLayer(markerFasumKhusus[i]);
                mapContainer.removeLayer(fasumKhususClusterGroup);
            }
            markerFasumKhusus = new Array(); 

            for (let i = 0; i < markerPolres.length; i++) { 
                mapContainer.removeLayer(markerPolres[i]);
            }
            markerPolres = new Array(); 

            for (let i = 0; i < markerLaporan.length; i++) { 
                mapContainer.removeLayer(markerLaporan[i]);
                mapContainer.removeLayer(laporanClusterGroup);
            }
            markerLaporan = new Array();

            for (let i = 0; i < markerLaporanPanic.length; i++) { 
                mapContainer.removeLayer(markerLaporanPanic[i]);
                mapContainer.removeLayer(panicClusterGroup);
            }
            markerLaporanPanic = new Array();

            // console.log(`${centerLat},${centerLng}`);  
            
             
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>dashboard/getFilter", 
                data : {
                    "filter" : arrayFilter.toString(),
                    "radius" : 15000,
                    "coordinate" : `${centerLat},${centerLng}`,
                    "type" : arrayFilterFasumKategori.toString(), 
                    "startdate" : $("#startdate").val(),
                    "enddate" : $("#enddate").val(),
                }, 
                dataType : "JSON",
                success : function(result){  
                    $("#overlay").fadeOut(300); 
                    var ressTurjawali = result['data']['turjawali'];
                    var ressPolres = result['data']['polres'];
                    var ressCctv = result['data']['cctv'];
                    var ressLAP = result['data']['titik_laporan'];
                    var ressPanic = result['data']['titik_panicButton'];
                    var ressFasum = result['data']['fasum'];
                    var ressFasumKhusus = result['data']['fasum_khusus'];
                    var ressTroublespot = result['data']['troublespot'];
                    var ressSchedule = result['data']['jadwal_kegiatan'];
                    var ressOperasi = result['data']['operasi'];
                    // console.log(result);

                    if(ressTurjawali && ressTurjawali.length > 0){  
                        var filterTurjawali = ressTurjawali.filter(function (e) {
                            return e.latitude != null && e.longitude != null;
                        }); 
                    }
                    if(ressPolres && ressPolres.length > 0){  
                        var filterpolres = ressPolres.filter(function (e) {
                            return e.latitude != null && e.longitude != null;
                        }); 

                        if(filterpolres.length > 0){  
                            var logoMarker = '';
                            var logoBody = '';
                            for (let i = 0; i < filterpolres.length; i++) {  
        
                                    var latitudePolres = parseFloat(filterpolres[i].latitude);
                                    var longitudePolres = parseFloat(filterpolres[i].longitude); 
            
                                    markerPolres[i] = L.marker([latitudePolres,longitudePolres], { icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `<img src="<?php echo base_url();?>assets/icon/polres.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                        }) }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3">
                                                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                        <div class="avatar-xl me-3">
                                                            <img src="<?php echo base_url();?>assets/icon/polres.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <h5>${filterpolres[i].name_polres}</h5> 
                                                    </div>
                                                    <div class="col-md-12 col-12 mt-3">
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
                                                    <div class="col-md-12 col-12" style="margin-top: -30px;">
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
                                                    <div class="col-md-12 col-12"  style="margin-top: -30px;">
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
                                                    <div class="col-md-12 col-12" style="margin-top: -30px;">
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
                                    `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                                

                            }
                        }
                    }

                    if(ressCctv && ressCctv.length > 0){  
                        var filterCctv = ressCctv.filter(function (e) {
                            return e.lat_cctv != null && e.lng_cctv != null;
                        });  

                        if(filterCctv.length > 0){  
                            for (let i = 0; i < filterCctv.length; i++) {     
                                id = i;  
                                var latitudeCCTV = parseFloat(filterCctv[i].lat_cctv);
                                var longitudeCCTV = parseFloat(filterCctv[i].lng_cctv);

                                var resource = '';
                                if(filterCctv[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                    resource = `<iframe id="myIframe" src="${filterCctv[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
                                }else{
                                    resource = `<img style="width: 300px;" src="${filterCctv[i].link_cctv}" />`;
                                }

                                cctvClusterGroup.addLayer( markerCCTV[i] = L.marker([latitudeCCTV,longitudeCCTV], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 40px; margin-top: -10px;margin-left: -10px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
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
                                        
                                    `,{minWidth : 100,maxWidth : 560,width : 400})
                                );
                            }
                            mapContainer.addLayer(cctvClusterGroup);
                        }
                    } 

                    if(ressLAP && ressLAP.length > 0){  
                        var filterLaporan = ressLAP.filter(function (e) {
                            return e.coordinate.latitude != "" && e.coordinate.longitude != "";
                        });   

 
                        if(filterLaporan.length > 0){  
                            for (let i = 0; i < filterLaporan.length; i++) {     
                                id = i;  
                                var latitudeLapPnc = parseFloat(filterLaporan[i].coordinate.latitude);
                                var longitudeLapPnc = parseFloat(filterLaporan[i].coordinate.longitude); 
                                var iconLapPanic; 

                                if(filterLaporan[i].status == 0 || filterLaporan[i].status == null){
                                    $statusLapPnc = ` 
                                        <span class="badge rounded-pill bg-danger">Tidak Selesai</span> 
                                    `;
                                
                                }else{
                                    $statusLapPnc = ` 
                                        <span class="badge rounded-pill bg-success">Selesai</span> 
                                    `;
                                }

                                if(filterLaporan[i].categori == 1){
                                    kategoriLaporan = 'Tindakan Kriminal';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kriminal.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporan[i].categori == 2){
                                    kategoriLaporan = 'Kecelakaan Lalu Lintas';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporan[i].categori == 3){
                                    kategoriLaporan = 'Bencana Alam';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - bencana alam.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporan[i].categori == 4){
                                    kategoriLaporan = 'Kemacetan';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporan[i].categori == 99){
                                    kategoriLaporan = 'Lainnya';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else{
                                    kategoriLaporan = 'Lainnya Other';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }

                                laporanClusterGroup.addLayer( markerLaporan[i] = L.marker([latitudeLapPnc,longitudeLapPnc], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/laporan penugasan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                    <div style="width: 300px;">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center;">
                                                <a href="http://k3ig20korlantas.id:3001/uploads/laporan/${filterLaporan[i].foto}" target="_blank"><img src="http://k3ig20korlantas.id:3001/uploads/laporan/${filterLaporan[i].foto}" class="avatar-xl rounded-circle img-thumbnail"></a>
                                            </div>
                                            <div class="col-md-12" style="text-align: center;">
                                                ${call_wa_dan_biasa(filterLaporan[i].officer.phone_officer)}
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
                                                <span style="font-size: 12px;"> : ${filterLaporan[i].description} </span> 
                                            </div>  
                                        </div> 
                                    </div>
                                        
                                `,{minWidth : 100,maxWidth : 560,width : 400}) 
                                ); 
                            }
                            mapContainer.addLayer(laporanClusterGroup);
                        }

                    }

                    if(ressPanic && ressPanic.length > 0){  
                        var filterLaporanPanic = ressPanic.filter(function (e) {
                            return e.coordinate.latitude != "" && e.coordinate.longitude != "";
                        });   
                        
                        if(filterLaporanPanic.length > 0){  
                            for (let i = 0; i < filterLaporanPanic.length; i++) {     
                                id = i;  
                                var latitudeLapPnc = parseFloat(filterLaporanPanic[i].coordinate.latitude);
                                var longitudeLapPnc = parseFloat(filterLaporanPanic[i].coordinate.longitude); 
                                var iconLapPanic;

                                if(filterLaporanPanic[i].categori == 1){
                                    kategoriLaporan = 'Tindakan Kriminal';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kriminal.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporanPanic[i].categori == 2){
                                    kategoriLaporan = 'Kecelakaan Lalu Lintas';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporanPanic[i].categori == 3){
                                    kategoriLaporan = 'Bencana Alam';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - bencana alam.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporanPanic[i].categori == 4){
                                    kategoriLaporan = 'Kemacetan';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else if(filterLaporanPanic[i].categori == 99){
                                    kategoriLaporan = 'Lainnya';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }else{
                                    kategoriLaporan = 'Lainnya Other';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`;
                                }

                                if(filterLaporanPanic[i].status == 0 || filterLaporanPanic[i].status == null){
                                    $statusLapPnc = ` 
                                        <span class="badge rounded-pill bg-danger">Tidak Selesai</span> 
                                    `;
                                
                                }else{
                                    $statusLapPnc = ` 
                                        <span class="badge rounded-pill bg-success">Selesai</span> 
                                    `;
                                }

                                panicClusterGroup.addLayer( markerLaporanPanic[i] = L.marker([latitudeLapPnc,longitudeLapPnc], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: iconLapPanic,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                    <div style="width: 300px;">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center;">
                                                <a href="http://k3ig20korlantas.id:3001/uploads/laporan/${filterLaporanPanic[i].foto}" target="_blank"><img src="http://k3ig20korlantas.id:3001/uploads/laporan/${filterLaporanPanic[i].foto}" class="avatar-xl rounded-circle img-thumbnail"></a>
                                            </div>

                                            <div class="col-md-12" style="text-align: center;">
                                                ${call_wa_dan_biasa(filterLaporanPanic[i].officer.phone_officer)}
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
                                                <span style="font-size: 12px;"> : ${filterLaporanPanic[i].description} </span> 
                                            </div>  
                                        </div> 
                                    </div>
                                        
                                `,{minWidth : 100,maxWidth : 560,width : 400}) 
                                );
                            }
                            mapContainer.addLayer(panicClusterGroup);
                        }
 

                    }

                    if(ressFasumKhusus && ressFasumKhusus.length > 0){  
                        var logoMarker = '';
                        var logoBody = '';
                        for (let i = 0; i < ressFasumKhusus.length; i++) {  
                            if(ressFasumKhusus[i].fasum_type == 1){
                                logoMarker = `hotel.png`;
                                logoBody = `hotel.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 2){
                                logoMarker = `rumah ibadah.png`;
                                logoBody = `rumah ibadah.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 3){
                                logoMarker = `pom bensin.png`;
                                logoBody = `pom bensin.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 4){
                                logoMarker = `rest_area.png`;
                                logoBody = `rest_area.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 5){
                                logoMarker = `rumah makan.png`;
                                logoBody = `rumah makan.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 6){
                                logoMarker = `wisata.png`;
                                logoBody = `wisata.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 7){
                                logoMarker = `damkar.png`;
                                logoBody = `damkar.png`;
                            }else if(ressFasumKhusus[i].fasum_type == 8){
                                logoMarker = `rumah sakit umum.png`;
                                logoBody = `rumah sakit umum.png`;
                            }
                            
                                var latitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lat);
                                var longitudeFasum = parseFloat(ressFasumKhusus[i].fasum_lng); 
                                fasumKhususClusterGroup.addLayer( markerFasumKhusus[i] = L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -10px;margin-left: -10px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="<?php echo base_url();?>assets/icon/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressFasumKhusus[i].category_fasum.name_category_fasum}</h5> 
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
                                                            <p style="font-size: 12px;">${ressFasumKhusus[i].fasum_name}</p>
                                                        </div>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-12 col-12" style="margin-top: -30px;">
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
                                `,{minWidth : 100,maxWidth : 560,width : 400})
                                );  
                        }
                        mapContainer.addLayer(fasumKhususClusterGroup);
                    }

                    if(ressFasum && ressFasum.length > 0){ 
                        var filterFasum = ressFasum.filter(function (e) {
                            return e.geometry.location.lat != null && e.geometry.location.lng != null;
                        }); 

                        if(filterFasum.length > 0){  
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
                                    markerFasum[i] = L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
                                        className: 'location-pin',
                                        html: `<img style="background-color:${filterFasum[i].icon_background_color};" src="${filterFasum[i].icon}"><div class="pin" style="background-color:${filterFasum[i].icon_background_color}"></div>`,
                                        iconSize: [5, 5],
                                        //iconAnchor: [18, 30]
                                        iconAnchor: [5, 10]

                                        }) }).bindPopup(`
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
                                    `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                                
                            }
                        }
                    }  
                    if(ressTroublespot && ressTroublespot.length > 0){ 
                        var filterTroublespot = ressTroublespot.filter(function (e) {
                            return e.lat_cctv != null && e.lng_cctv != null;
                        }); 
                    }   
                    if(ressSchedule && ressSchedule.length > 0){  
                        var filterSchedule = ressSchedule.filter(function (e) {
                            return e.coordinate_schedule != null;
                        });   
                        // console.log(filterSchedule); 
                        if(filterSchedule.length > 0){  
                            for (var i = 0; i < filterSchedule.length; i++) {   
                                
                                var cordinateJadwal = filterSchedule[i].coordinate_schedule;
                                var latlongJadwal =  cordinateJadwal.split(',');
                                var latitudeJadwal = parseFloat(latlongJadwal[0]);
                                var longitudeJadwal = parseFloat(latlongJadwal[1]);
                                

                                jadwalClusterGroup.addLayer( markerJadwal[i] = L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                        }) }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                        <div class="avatar-xl me-3">
                                                            <img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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
                                    `,{minWidth : 100,maxWidth : 560,width : 400})
                                    ); 
                            }
                            mapContainer.addLayer(jadwalClusterGroup);
                        }
                    }   

                    if(ressOperasi && ressOperasi.length > 0){ 
                        var filterOperasi = ressOperasi.filter(function (e) {
                            return e.lat_cctv != null && e.lng_cctv != null;
                        });   
                    } 




                }
            });
        }

        $("#filterCari").on("click", function (e) { 
            if($("#cctv").is(':checked')){ 
                $("#cctvDisplay").prop('checked', true); 
            }else{
                $("#cctvDisplay").prop('checked', false); 
                $("#cctvDisplay").val();
            }
            if($("#fasum_khusus").is(':checked')){ 
                $("#fasumKhususDisplay").prop('checked', true); 
            }else{
                $("#fasumKhususDisplay").prop('checked', false); 
                $("#fasumKhususDisplay").val();
            }
            if($("#jadwal").is(':checked')){ 
                $("#kegiatanDisplay").prop('checked', true); 
            }else{
                $("#kegiatanDisplay").prop('checked', false); 
                $("#kegiatanDisplay").val();
            }
            if($("#panic").is(':checked')){ 
                $("#panicDisplay").prop('checked', true); 
            }else{
                $("#panicDisplay").prop('checked', false); 
                $("#panicDisplay").val();
            }
            if($("#operasi").is(':checked')){ 
                $("#operasiDisplay").prop('checked', true); 
            }else{
                $("#operasiDisplay").prop('checked', false); 
                $("#operasiDisplay").val();
            }

            console.log({a: $("#startdate").val(),b:$("#enddate").val()});
            serverSideFilter();
        });


        $("#kegiatanDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#jadwal").prop('checked', true); 
            }else{
                $("#jadwal").prop('checked', false); 
                $("#jadwal").val();
            }
            serverSideFilter();
        }); 
        $("#cctvDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#cctv").prop('checked', true); 
            }else{
                $("#cctv").prop('checked', false); 
                $("#cctv").val();
            }
            serverSideFilter();
        });
        $("#fasumKhususDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#fasum_khusus").prop('checked', true); 
            }else{
                $("#fasum_khusus").prop('checked', false); 
                $("#fasum_khusus").val();
            }
            serverSideFilter();
        });
        $("#panicDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#panic").prop('checked', true); 
            }else{
                $("#panic").prop('checked', false); 
                $("#panic").val();
            }
            serverSideFilter();
        });
        $("#operasiDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#operasi").prop('checked', true); 
            }else{
                $("#operasi").prop('checked', false); 
                $("#operasi").val();
            }
            serverSideFilter();
        });

        // $("[name=filter]").on("change", function (e) { 
        //     serverSideFilter();
        // });
        // $("[name=filterFasumKateg]").on("change", function (e) { 
        //     serverSideFilter();
        // });
        

        


        // function serverSideGetJadwal(){
        //     $("#overlay").fadeIn(300);  
        //     $.ajax({
        //         type : "POST",
        //         url : "<?php echo base_url();?>dashboard/getJadwal", 
        //         data : {
        //             "status" : '1',
        //         }, 
        //         dataType : "JSON",
        //         success : function(result){ 
        //             let ressData = result['data'];
        //             $("#overlay").fadeOut(300);

        //             let ress = ressData.filter(function (e) {
        //                 return e.coordinate_schedule != null;
        //             });   
                    
        //             if(ress.length > 0){  
        //                 for (let i = 0; i < ress.length; i++) {   
                            
        //                     var cordinateJadwal = ress[i].coordinate_schedule;
        //                     var latlongJadwal =  cordinateJadwal.split(',');
        //                     var latitudeJadwal = parseFloat(latlongJadwal[0]);
        //                     var longitudeJadwal = parseFloat(latlongJadwal[1]);
                            

        //                         markerJadwal[i] = L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({
        //                             // className: 'location-pin',
        //                             html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
        //                             iconSize: [5, 5],
        //                             iconAnchor: [5, 10]
        //                             // iconAnchor: [10, 33]
        //                             }) }).bindPopup(`
        //                                 <div class="text-center" style="width: 300px;"> 
        //                                     <div class="row mt-3"> 
        //                                         <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
        //                                             <div class="avatar-xl me-3">
        //                                                 <img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
        //                                             </div>
        //                                         </div>
        //                                         <div class="col-md-12 col-12 mt-3">
        //                                             <h5>Jadwal Kegiatan</h5> 
        //                                         </div>
        //                                         <div class="col-md-12 col-12 mt-1">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Kegiatan</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6">
        //                                                     <p style="font-size: 12px;">${ress[i].activity}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div> 
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Tanggal Kegiatan</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6">
        //                                                     <p style="font-size: 12px;">${ress[i].date_schedule.substr(0, 10)}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>  
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6">
        //                                                     <p style="font-size: 12px;">${ress[i].start_time.substr(0, 5)} - ${ress[i].end_time.substr(0, 5)} WITA</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>  
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6">
        //                                                     <p style="font-size: 12px;">${ress[i].address_schedule}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>   
        //                                     </div>
        //                                 </div>
        //                         `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                            
        //                 }
        //             }
        //         }
        //     });

        // }


        
        // $("#jadwal").on("change", function (e) {
        //     if($(this).is(':checked')){ 
        //         serverSideGetJadwal();
        //     }else{ 
        //         for (let i = 0; i < markerJadwal.length; i++) { 
        //             mapContainer.removeLayer(markerJadwal[i]);
        //         }
        //         markerJadwal = new Array();
        //     } 
        // });
        

    

        // $("#backHalaman").on("click", function (e) {
        //     var nilaiHalaman = parseFloat($('[name=halaman]').val()) - 1;
        //     if(nilaiHalaman < 1){
        //         $("#backHalaman").addClass("disabled");
        //     }else{
        //         $('[name=halaman]').val(nilaiHalaman);
        //         getRenpam()
        //     } 
        // });
        // $("#nextHalaman").on("click", function (e) {
        //     var nilaiHalaman = parseFloat($('[name=halaman]').val()) + 1;
        //     if(nilaiHalaman > 1){
        //         $("#backHalaman").removeClass("disabled");
        //         $('[name=halaman]').val(nilaiHalaman);
        //         getRenpam()
        //     }
        // });



        var checkedRenpam = [];
        var openModalFilter = false;
        function getRenpam(){
            let countlist = 0;
            let list = ""; 
            var data = []; 
            
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>dashboard/getRenpam", 
                data : {
                    "status" : '1',
                    // "search" : $('#searchRenpam').val(),
                    "type" : $('#filterTypeRenpam').val(),
                    // "page": $('[name=halaman]').val(),
                }, 
                dataType : "JSON",
                success : function(result){ 
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


                    if(ress.length > 0){


                        openModalFilter = true; 
                        $("#totalRenpamOn").html(`${ress.length}`);
                        ress.forEach(el => {
                            route.push(el.route);
                            route1.push(el.route_alternatif_1);
                            route2.push(el.route_alternatif_2);
                            route3.push(el.route_masyarakat);
                            route4.push(el.route_umum);
 
                            checkedRenpam.push({
                                name_renpam : el.name_renpam,
                                checked : 0,
                            });

                            if(el.status_renpam == 1){
                                status = `
                                <a href="<?php echo base_url()?>operasi/renpam/edit/${el.id}" target="_blank">
                                    <div class="rounded-circle m-auto" style="background:green; height:15px ; width:15px"></div>
                                </a>`;
                            }else{
                                status = `
                                <a href="<?php echo base_url()?>operasi/renpam/edit/${el.id}" target="_blank">
                                    <div class="rounded-circle m-auto" style="background:red; height:15px ; width:15px"></div>
                                </a>
                                `;
                            }
        

                            var cariIndex = checkedRenpam.findIndex((obj => obj.checked == 1));
                            if(cariIndex){

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
                                        title="Instruksi Kakor" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
                                            <i style="color: #495057;" class="mdi mdi-beaker-plus-outline"></i>
                                        </a>
                                        <input type="checkbox" class="form-input" name="selectRenpam" id="listRenpamClick${countlist}"  data-name="${el.name_renpam}" data-cord=${JSON.stringify(el.route)} data-type="${el.type_renpam}" data-awal="${el.title_start}" data-akhir="${el.title_end}">
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
                        //                             title="Instruksi Kakor" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
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
     
    
                        for (let i = 0; i < ress.length; i++){ 
                            $(`#listRenpamClick${i+1}`).on("change", function (e) {
    
                                console.log(checkedRenpam);  
                                //Find index of specific object using findIndex method.    
                                objIndex = checkedRenpam.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                console.log(objIndex);

                                //Log object to Console.
                                console.log("Before update: ", checkedRenpam[objIndex]);

                                //Update object's name property.
                                if($(this).is(':checked')){  
                                    checkedRenpam[objIndex].checked = 1;
                                }else{
                                    checkedRenpam[objIndex].checked = 0;
                                } 

                                //Log object to console again.
                                console.log("After update: ", checkedRenpam[objIndex]);
                                
                                var titikAwal = $(this).data('awal') == null ? '-' : $(this).data('awal');
                                var titikAkhir = $(this).data('akhir') == null ? '-' : $(this).data('akhir');
 

                                var typeRenpam = $(this).data('type');
                                if(typeRenpam == 3){ //penjagaan
                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/1323/1323306.png`;
                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                }else if(typeRenpam == 4){ //pengaturan 
                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196781.png`;
                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                }else if(typeRenpam == 5){ //penutupan 
                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/196/196764.png`;
                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" ></div><div class="pulse"></div>`;
                                }else{
                                    iconMarkerRenpam = `https://cdn-icons-png.flaticon.com/512/178/178753.png`;
                                    markerType = `<img src="${iconMarkerRenpam}"><div class="pin"></div><div class="pulse"></div>`;
                                    markerTypeOther = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: gray;"></div><div class="pulse"></div>`;
                                    markerTypeEnd = `<img src="${iconMarkerRenpam}"><div class="pin" style="background: green;"></div><div class="pulse"></div>`;
                                }
    
                                if(route1[i] != null && route1[i][0]['latLng'] != null){
                                    
                                    if($(this).is(':checked')){  
                                        routingRenpam1[i] = null;
                                        routingRenpam1[i] = L.Routing.control({
                                            show:false,
                                            draggableWaypoints: false,
                                            addWaypoints: false,
                                            waypoints: route1[i],
                                            router: new L.Routing.osrmv1({
                                                language: 'en',
                                                profile: 'car'
                                            }),
                                            lineOptions: {
                                                styles: [{color: "#b935b9", weight: 5, className: 'animateRoute'}]
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
                                                            <h3>${titikAwal}</h3>
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
                                                            <h3>${titikAkhir}</h3>
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
                                            geocoder: L.Control.Geocoder.nominatim({})
                                        }).addTo(mapContainer); 
                                        // mapContainer.addControl(routingRenpam1[i]);  
                                    }else{
                                        mapContainer.removeControl(routingRenpam1[i]);   
                                    }
                                }else{
                                    // Swal.fire(
                                    // `Route Alternative tidak ada, atau belum di daftarkan!`, 
                                    // '',
                                    // 'warning'
                                    // ).then(function() { 
                                    // });
                                }
    
                                if(route2[i] != null && route2[i][0]['latLng'] != null){ 
                                    
                                    if($(this).is(':checked')){  
                                        routingRenpam2[i] = null;
                                        routingRenpam2[i] = L.Routing.control({
                                            show:false,
                                            draggableWaypoints: false,
                                            addWaypoints: false,
                                            waypoints: route2[i],
                                            router: new L.Routing.osrmv1({
                                                language: 'en',
                                                profile: 'car'
                                            }),
                                            lineOptions: {
                                                styles: [{color: "gray", weight: 5, className: 'animateRoute'}]
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
                                                            <h3>${titikAwal}</h3>
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
                                                            <h3>${titikAkhir}</h3>
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
                                            geocoder: L.Control.Geocoder.nominatim({})
                                        }).addTo(mapContainer); 
                                        // mapContainer.addControl(routingRenpam1[i]); 
                                    }else{
                                        mapContainer.removeControl(routingRenpam2[i]); 
                                    }
                                }else{
                                    // Swal.fire(
                                    // `Route Escape tidak ada, atau belum di daftarkan!`, 
                                    // '',
                                    // 'warning'
                                    // ).then(function() { 
                                    // });
                                }
    
                                if(route3[i] != null && route3[i][0]['latLng'] != null){ 
                                    
                                    if($(this).is(':checked')){  
                                        routingRenpam3[i] = null;
                                        routingRenpam3[i] = L.Routing.control({
                                            show:false,
                                            draggableWaypoints: false,
                                            addWaypoints: false,
                                            waypoints: route3[i],
                                            router: new L.Routing.osrmv1({
                                                language: 'en',
                                                profile: 'car'
                                            }),
                                            lineOptions: {
                                                styles: [{color: "#000dda", weight: 5, className: 'animateRoute'}]
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
                                                            <h3>${titikAwal}</h3>
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
                                                            <h3>${titikAkhir}</h3>
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
                                            geocoder: L.Control.Geocoder.nominatim({})
                                        }).addTo(mapContainer); 
                                        // mapContainer.addControl(routingRenpam1[i]); 
                                    }else{
                                        mapContainer.removeControl(routingRenpam3[i]); 
                                    }
                                }else{
                                    // Swal.fire(
                                    // `Route Escape tidak ada, atau belum di daftarkan!`, 
                                    // '',
                                    // 'warning'
                                    // ).then(function() { 
                                    // });
                                }
    
    
                                if(route4[i] != null && route4[i][0]['latLng'] != null){ 
                                    
                                    if($(this).is(':checked')){  
                                        routingRenpam4[i] = null;
                                        routingRenpam4[i] = L.Routing.control({
                                            show:false,
                                            draggableWaypoints: false,
                                            addWaypoints: false,
                                            waypoints: route4[i],
                                            router: new L.Routing.osrmv1({
                                                language: 'en',
                                                profile: 'car'
                                            }),
                                            lineOptions: {
                                                styles: [{color: "#bdbd0b", weight: 5, className: 'animateRoute'}]
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
                                                            <h3>${titikAwal}</h3>
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
                                                            <h3>${titikAkhir}</h3>
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
                                            geocoder: L.Control.Geocoder.nominatim({})
                                        }).addTo(mapContainer); 
                                        // mapContainer.addControl(routingRenpam1[i]); 
                                    }else{
                                        mapContainer.removeControl(routingRenpam4[i]); 
                                    }
                                }else{
                                    // Swal.fire(
                                    // `Route Escape tidak ada, atau belum di daftarkan!`, 
                                    // '',
                                    // 'warning'
                                    // ).then(function() { 
                                    // });
                                }
    
    
    
                                if(route[i] != null && route[i][0]['latLng'] != null){
                                    
                                    if($(this).is(':checked')){   
                                        routingRenpam[i] = null;
                                        routingRenpam[i] = L.Routing.control({
                                            show:false,
                                            draggableWaypoints: false,
                                            addWaypoints: false,
                                            waypoints: route[i],
                                            router: new L.Routing.osrmv1({
                                                language: 'en',
                                                profile: 'car'
                                            }),
                                            lineOptions: {
                                                styles: [{color: "red", weight: 5, className: 'animateRoute'}] 
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
                                                            <h3>${titikAwal}</h3>
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
                                                            <h3>${titikAkhir}</h3>
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
                                            geocoder: L.Control.Geocoder.nominatim({})
                                        }).addTo(mapContainer);  
                                        // mapContainer.addControl(routingRenpam[i]); 
                                    }else{ 
                                        mapContainer.removeControl(routingRenpam[i]);  
                                    }
                                    
                                    
                                }else{
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

                        
                    }else{
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
        
         
        $('#myModalFilter').on('shown.bs.modal', function() { 


            let countlist = 0;
            let list = ""; 
            var data = []; 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>dashboard/getJadwal", 
                data : {
                    "status" : '1',
                }, 
                dataType : "JSON",
                success : function(result){ 
                    let ress = result['data'];
                    // console.log(result['test']);
                    countlist = 0;
                    list = "";
                    var status = ""; 

                    if($('#jadwal').is(':checked')){
                        $("#totalKegiatanOn").html(ress.length);
                        ress.forEach(el => {
                            if(el.status_schedule == 1){
                                status = `
                                <div>
                                    <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                                </div>`;
                            }else{
                                status = `
                                <div>
                                    <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>
                                </div>
                                `;
                            }
                            countlist += 1;
                            list += `<a class="list-group-item text-start" style="display: flex;"
                            id="listJadwalClick${countlist}"   
                            data-alamat="${el.address_schedule}"  
                            data-cord="${el.coordinate_schedule}"
                            href="javascript:void(0)">${status} &nbsp;&nbsp; ${el.activity}</a>`;
                            $('#listJadwal').html(list); 
                        });  
                        for (let i = 0; i < ress.length; i++){ 
                            $(`#listJadwalClick${i+1}`).click(function(){   
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]); 
                                mapContainer.flyTo([latitude, longitude], 17); 
        
        
                            });
                        } 
                    }else{
                        $('#listJadwal').html('Mohon untuk pilih filter Jadwal!'); 
                    }
    
                }
            });

            
            if(openModalFilter == false){ 
                getRenpam();
            } 

    
        });
    


        // function serverSideGetCCTV(){
        //     $("#overlay").fadeIn(300);  
        //     $.ajax({
        //         type : "POST",
        //         url : "<?php echo base_url();?>dashboard/getCCTV", 
        //         data : {
        //             "status" : '1',
        //         }, 
        //         dataType : "JSON",
        //         success : function(result){ 
        //             let ressData = result['data'];
        //             let ress = ressData.filter(function (e) {
        //                 return e.lat_cctv != null && e.lng_cctv != null;
        //             });   
                    
        //             $("#overlay").fadeOut(300);
                    
        //             if(ress.length > 0){  
        //                 for (let i = 0; i < ress.length; i++) {     
        //                     id = i;  
        //                     var latitudeCCTV = parseFloat(ress[i].lat_cctv);
        //                     var longitudeCCTV = parseFloat(ress[i].lng_cctv);

        //                     var resource = '';
        //                     if(ress[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
        //                         resource = `<iframe id="myIframe" src="${ress[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
        //                     }else{
        //                         resource = `<img style="width: 300px;" src="${ress[i].link_cctv}" />`;
        //                     }

        //                     markerCCTV[i] = L.marker([latitudeCCTV,longitudeCCTV], { icon: L.divIcon({
        //                         // className: 'location-pin',
        //                         html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 22px; margin-top: -10px;margin-left: -10px;">`,
        //                         iconSize: [5, 5],
        //                         iconAnchor: [5, 10]
        //                         // iconAnchor: [10, 33]
        //                         }) }).bindPopup(`
        //                         <div style="width: 300px;">
        //                             <div class="row">
        //                                 <div class="col-md-12" style="text-align: center;">
        //                                     <h5>${ress[i].address_cctv}</h5>
        //                                 </div>
        //                                 <div class="col-md-12"> 
        //                                     ${resource}
        //                                 </div> 
        //                             </div>
        //                         </div>
                                    
        //                     `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);   
        //                 }
        //             }
        //         }
        //     }); 
        // } 

        // $("#cctv").on("change", function (e) {
        //     if($(this).is(':checked')){ 
        //         serverSideGetCCTV();
        //     }else{ 
        //         for (let i = 0; i < markerCCTV.length; i++) { 
        //             mapContainer.removeLayer(markerCCTV[i]);
        //         } 
        //         markerCCTV = new Array();  
        //     } 
        // });



        // function serverSideGetFasum(){ 
        //     $("#overlay").fadeIn(300);   
        //     $.ajax({
        //         type : "POST",
        //         url : "<?php echo base_url();?>dashboard/getFasum", 
        //         data : {
        //             "status" : '1',
        //         }, 
        //         dataType : "JSON",
        //         success : function(result){ 
        //             let ressData = result['data'];
        //             let ress = ressData.filter(function (e) {
        //                 return e.fasum_lat != null && e.fasum_lng != null;
        //             });  
        //             $("#overlay").fadeOut(300);
                    
        //             if(ress.length > 0){  
        //                 var logoMarker = '';
        //                 var logoBody = '';
        //                 for (let i = 0; i < ress.length; i++) {  
        //                     if(ress[i].fasum_type == 1){
        //                         logoMarker = `hotel.png`;
        //                         logoBody = `hotel.png`;
        //                     }else if(ress[i].fasum_type == 2){
        //                         logoMarker = `rumah ibadah.png`;
        //                         logoBody = `rumah ibadah.png`;
        //                     }else if(ress[i].fasum_type == 3){
        //                         logoMarker = `pom bensin.png`;
        //                         logoBody = `pom bensin.png`;
        //                     }else if(ress[i].fasum_type == 4){
        //                         logoMarker = `rest_area.png`;
        //                         logoBody = `rest_area.png`;
        //                     }else if(ress[i].fasum_type == 5){
        //                         logoMarker = `rumah makan.png`;
        //                         logoBody = `rumah makan.png`;
        //                     }else if(ress[i].fasum_type == 6){
        //                         logoMarker = `wisata.png`;
        //                         logoBody = `wisata.png`;
        //                     }else if(ress[i].fasum_type == 7){
        //                         logoMarker = `damkar.png`;
        //                         logoBody = `damkar.png`;
        //                     }else if(ress[i].fasum_type == 8){
        //                         logoMarker = `rumah sakit umum.png`;
        //                         logoBody = `rumah sakit umum.png`;
        //                     }
                            
        //                         var latitudeFasum = parseFloat(ress[i].fasum_lat);
        //                         var longitudeFasum = parseFloat(ress[i].fasum_lng); 
        //                         markerFasum[i] = L.marker([latitudeFasum,longitudeFasum], { icon: L.divIcon({
        //                             // className: 'location-pin',
        //                             html: `<img src="<?php echo base_url();?>assets/icon/${logoMarker}" style="width: 22px; margin-top: -10px;margin-left: -10px;">`,
        //                             iconSize: [5, 5],
        //                             iconAnchor: [5, 10]
        //                             // iconAnchor: [10, 33]
        //                             }) }).bindPopup(`
        //                                 <div class="text-center" style="width: 300px;"> 
        //                                     <div class="row mt-3">
        //                                         <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
        //                                             <div class="avatar-xl me-3">
        //                                                 <img src="<?php echo base_url();?>assets/icon/${logoBody}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
        //                                             </div>
        //                                         </div>
        //                                         <div class="col-md-12 col-12 mt-3">
        //                                             <h5>Fasilitas Umum</h5>
        //                                             <span style="font-size: 14px;">- ${ress[i].category_fasum.name_category_fasum} -</span>
        //                                         </div>
        //                                         <div class="col-md-12 col-12 mt-3">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Nama Fasilitas</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].fasum_name}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div> 
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].fasum_address}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>  
        //                                         <div class="col-md-12 col-12"  style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].fasum_phone}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>  
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].fasum_open_time != null ? ress[i].fasum_open_time : '00:00'} - ${ress[i].fasum_close_time != null ? ress[i].fasum_close_time : '00:00'} WITA</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>   
        //                                     </div>
        //                                 </div> 
        //                         `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                            
        //                 }
        //             }
        //         }
        //     }); 
        // } 

        // $("#fasum").on("change", function (e) {
        //     if($(this).is(':checked')){  
        //         serverSideGetFasum();
        //     }else{ 
        //         for (let i = 0; i < markerFasum.length; i++) { 
        //             mapContainer.removeLayer(markerFasum[i]);
        //         }
        //         markerFasum = new Array();  
        //     } 
        // });



        // function serverSideGetPolres(){
        //     $("#overlay").fadeIn(300);   
        //     $.ajax({
        //         type : "POST",
        //         url : "<?php echo base_url();?>dashboard/getPolres", 
        //         data : {
        //             "status" : '1',
        //         }, 
        //         dataType : "JSON",
        //         success : function(result){ 
        //             let ressData = result['data'];
        //             let ress = ressData.filter(function (e) {
        //                 return e.latitude != null && e.longitude != null;
        //             });  
        //             $("#overlay").fadeOut(300);
                    
        //             if(ress.length > 0){  
        //                 var logoMarker = '';
        //                 var logoBody = '';
        //                 for (let i = 0; i < ress.length; i++) {  
    
        //                         var latitudePolres = parseFloat(ress[i].latitude);
        //                         var longitudePolres = parseFloat(ress[i].longitude); 
        
        //                         markerPolres[i] = L.marker([latitudePolres,longitudePolres], { icon: L.divIcon({
        //                             // className: 'location-pin',
        //                             html: `<img src="<?php echo base_url();?>assets/icon/polres.png" style="width: 22px;margin-top: -10px;margin-left: -10px;">`,
        //                             iconSize: [5, 5],
        //                             iconAnchor: [5, 10]
        //                             // iconAnchor: [10, 33]
        //                             }) }).bindPopup(`
        //                                 <div class="text-center" style="width: 300px;"> 
        //                                     <div class="row mt-3">
        //                                         <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
        //                                             <div class="avatar-xl me-3">
        //                                                 <img src="<?php echo base_url();?>assets/icon/polres.png" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
        //                                             </div>
        //                                         </div>
        //                                         <div class="col-md-12 col-12 mt-3">
        //                                             <h5>${ress[i].name_polres}</h5> 
        //                                         </div>
        //                                         <div class="col-md-12 col-12 mt-3">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Alamat</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].address}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div> 
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Kode</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].code_satpas}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>  
        //                                         <div class="col-md-12 col-12"  style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">No Telpon</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].phone_polres != null ? ress[i].phone_polres : '-'}</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>  
        //                                         <div class="col-md-12 col-12" style="margin-top: -30px;">
        //                                             <div class="row text-start">
        //                                                 <div class="col-md-5 col-6">
        //                                                     <p style="font-size: 12px;font-weight: bold;">Waktu</p>  
        //                                                 </div>
        //                                                 <div class="col-md-1">
        //                                                     <p style="font-size: 12px;"> : </p>
        //                                                 </div>
        //                                                 <div class="col-md-6 col-6">
        //                                                     <p style="font-size: 12px;">${ress[i].open_time != null ? ress[i].open_time : '00:00'} - ${ress[i].close_time != null ? ress[i].close_time : '00:00'} WITA</p>
        //                                                 </div>
        //                                             </div> 
        //                                         </div>   
        //                                     </div>
        //                                 </div> 
        //                         `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer);  
                            

        //                 }
        //             }
        //         }
        //     }); 
        // } 

        // $("#polres").on("change", function (e) {
        //     if($(this).is(':checked')){ 
        //         serverSideGetPolres();
        //     }else{ 
        //         for (let i = 0; i < markerPolres.length; i++) { 
        //             mapContainer.removeLayer(markerPolres[i]);
        //         }
        //         markerPolres = new Array();  
        //     } 
        // });

        
        mapContainer.on('dblclick', function(e) { 
            $('#myModal').modal('show');
        }); 
    
        let arrayWaypoint = [];
        $('#myModal').on('shown.bs.modal', function() {
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
            


            // $('[name=cordinate]').val('-8.451740, 115.089643');
            // var initialCenter = [-8.451740, 115.089643];
            // var initialZoom = 9.65;
            // var googleStreet = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });
            // var googleHybrid = L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });
            // var googleSatelite = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });
            // var googleTerrain = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            //     maxZoom: 20,
            //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            //     attribution: '&copy; <a href="https://maps.google.com/">Google Map <?= date('Y') ?></a> contributors'
            // });

            // // StART MAP SECTION
            // var mapContainerInstruksi = L.map('mapG20Kegiatan', {
            //     maxZoom: 20,
            //     minZoom: 1,
            //     zoomSnap: 0.25,
            //     zoomControl: false,
            //     layers: [googleHybrid]
            // }).setView(initialCenter, initialZoom);
    
            // var baseMaps = {
            //     "Google Map Street": googleStreet,
            //     "Google Map Satelite": googleSatelite,
            //     "Google Map Hybrid": googleHybrid,
            //     "Google Map Terrain": googleTerrain,
            // };
            // var overlayMaps = {};
            // L.control.layers(baseMaps, overlayMaps, {
            //     position: 'topleft'
            // }).addTo(mapContainerInstruksi);
            // L.control.zoom({
            //     position: 'bottomleft'
            // }).addTo(mapContainerInstruksi);
            
            // // mapContainerInstruksi.invalidateSize(); 
            
            // var control = L.Routing.control({
            //     waypoints: arrayWaypoint,
            //     router: new L.Routing.osrmv1({
            //         language: 'en',
            //         profile: 'car'
            //     }),
            //     showAlternatives: true,
            //     geocoder: L.Control.Geocoder.nominatim({})
            // }).addTo(mapContainerInstruksi);


            // function createButton(label, container) {
            //     var btn = L.DomUtil.create('button', '', container);
            //     btn.setAttribute('type', 'button');
            //     btn.innerHTML = label;
            //     return btn;
            // }

            // mapContainerInstruksi.on('click', function(e) {
            //     var container = L.DomUtil.create('div'),
            //         startBtn = createButton('Start from this location', container), 
            //         destBtn = createButton('Go to this location', container);

            //     L.DomEvent.on(startBtn, 'click', function() {  

            //         control.spliceWaypoints(0, 1, e.latlng);
            //         mapContainerInstruksi.closePopup();
            //     }); 
            //     L.DomEvent.on(destBtn, 'click', function() { 

            //         control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
            //         mapContainerInstruksi.closePopup();
            //     });
            //     L.popup()
            //         .setContent(container)
            //         .setLatLng(e.latlng)
            //         .openOn(mapContainerInstruksi);
            // });



            
        });

    











        
    

        // mapContainer.on('pm:create', (e) => {
        //     e.layer.setStyle({ pmIgnore: false });
        //     L.PM.reInitLayer(e.layer);
        // });
        // mapContainer.pm.addControls({  
        //     position: 'bottomleft',  
        //     drawCircle: true,  
        // });  

        // mapContainer.on('pm:drawstart', ({ workingLayer }) => {
        // workingLayer.on('pm:vertexadded', (e) => {
        //     console.log(e);
        // });
        // });

    


        // // Initialise the FeatureGroup to store editable layers
        // var featureGroup = new L.FeatureGroup();
        // mapContainer.addLayer(featureGroup);

        // // define custom marker
        // var MyCustomMarker = L.Icon.extend({
        // options: {
        //     shadowUrl: null,
        //     iconAnchor: new L.Point(12, 12),
        //     iconSize: new L.Point(24, 24),
        //     iconUrl: 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Information_icon4_orange.svg'
        // }
        // });

        // var drawPluginOptions = {
        //     position: 'bottomleft',
        //     draw: {
        //         polyline: {
        //             shapeOptions: {
        //                 color: '#f357a1',
        //                 weight: 10
        //             }
        //         },
        //         polygon: {
        //             allowIntersection: false, // Restricts shapes to simple polygons
        //             drawError: {
        //                 color: '#e1e100', // Color the shape will turn when intersects
        //                 message: '<strong>Polygon draw does not allow intersections!<strong> (allowIntersection: false)' // Message that will show when intersect
        //             },
        //             shapeOptions: {
        //                 color: '#bada55'
        //             }
        //         },
        //         circle: true, // Turns off this drawing tool
        //         rectangle: {
        //             shapeOptions: {
        //                 clickable: false
        //             }
        //         },
        //         marker: {
        //             icon: new MyCustomMarker()
        //         }
        //     },
        //     edit: {
        //         featureGroup: featureGroup, //REQUIRED!!
        //         remove: false
        //     }
        // };



        // // Initialise the draw control and pass it the FeatureGroup of editable layers
        // var drawControl = new L.Control.Draw(drawPluginOptions);
        // mapContainer.addControl(drawControl);


        // var featureGroup = new L.FeatureGroup();
        // mapContainer.addLayer(featureGroup); 

        // mapContainer.on('draw:created', function(e) {
        // var type = e.layerType,
        //     layer = e.layer;

        // if (type === 'marker') {
        //     layer.bindPopup('A popup!');
        // }

        // featureGroup.addLayer(layer);
        // });

        // document.getElementById('export').onclick = function(e) {
        //     // Extract GeoJson from featureGroup
        //     var data = featureGroup.toGeoJSON();

        //     // Stringify the GeoJson
        //     var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

        //     // Create export
        //     document.getElementById('export').setAttribute('href', 'data:' + convertedData);
        //     document.getElementById('export').setAttribute('download','data.geojson');
        // } 
    });


    $(".formR").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault(); 

        // var routeArray = new Array();
        // routeArray = control.getWaypoints();
        // $('#ruteawal').val(JSON.stringify(routeArray)); 

        var formData = new FormData($('.formR')[0]); 
        $.ajax({
            url: "<?php echo base_url();?>operasi/Renpam/store",
            method: "POST",
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,  
            success: function (data) {
                $("#overlay").fadeOut(300);
                if(data['status'] == true){
                    Swal.fire(
                    `${data['message']}`, 
                    '',
                    'success'
                    ).then(function() { 
                        $("#myModal").modal('hide');
                        userDataTable.draw(); 
                    }); 
                }else{
                    Swal.fire(
                    `${data['message']}`, 
                    '',
                    'error'
                    ).then(function() { 
                    });
                } 
            }
        }); 
    });

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


        var routeAlternativeUtama = L.Routing.control({
            waypoints: arrayWaypointUtama,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
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

        $("#submitAlternativeUtama").on('click', function(e){ 
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
 

        var routeAlternative1 = L.Routing.control({
            waypoints: arrayWaypoint1,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
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

        $("#submitAlternative1").on('click', function(e){ 
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

       

        var routeAlternative2 = L.Routing.control({
            waypoints: arrayWaypoint2,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
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

        $("#submitAlternative2").on('click', function(e){ 
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

       

        var routeAlternative3 = L.Routing.control({
            waypoints: arrayWaypoint3,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
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

        $("#submitAlternative3").on('click', function(e){ 
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

       

        var routeAlternative4 = L.Routing.control({
            waypoints: arrayWaypoint4,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
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

        $("#submitAlternative4").on('click', function(e){ 
            routingAlternative4 = routeAlternative4.getWaypoints();
            $('#coordsAlternative4').val(JSON.stringify(routingAlternative4));  
            // $("#myModal2").modal('hide');
        });
    }); 

    

    $('#myModalNoteKakor').on('shown.bs.modal', function(event) {
        var myId = $(event.relatedTarget).data('idnote'); 
        var myNote = $(event.relatedTarget).data('note'); 
        var myAccounts = $(event.relatedTarget).data('accounts'); 
        var modal          = $(this);

        modal.find('#idNoteKakor').val(myId);
        modal.find('#noteKakor').val(myNote);

        var arrayAccount = new Array();
        for (let i = 0; i < myAccounts.length; i++){ 
            arrayAccount.push(myAccounts[i]['id']);
        }

        modal.find('#accountsNoteKakor').val(JSON.stringify(arrayAccount));
        

        // console.log(myAccounts);

        
    });

    $('#cekarrayTrack').on('click', function(e) { 
        console.log(markerFasum);
    });

    $(".formNoteKakor").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();  

            // var routeArray = new Array();
            // routeArray = control.getWaypoints();
            // $('#ruteawal').val(JSON.stringify(routeArray)); 

            var formData = new FormData($('.formNoteKakor')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Renpam/storeEditNoteKakor",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,  
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'success'
                        ).then(function() { 
                            $("#myModalNoteKakor").modal('hide'); 
                        }); 
                    }else{
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'error'
                        ).then(function() { 
                        });
                    } 
                }
            }); 
        });

    
</script> 
