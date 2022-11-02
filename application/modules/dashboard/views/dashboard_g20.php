<!-- <button id="cekarrayTrack">cek marker tracking</button> -->
<div class="row">
    <div class="col-md-12"> 

    <!-- <a href='#' id='export'>Export Features</a> -->
        
        <div class="row" style="display:flex;z-index: 999;position: absolute;">
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
                    <div id="listAddress" style="position: absolute;top: 60px;margin-left: 4px;border-radius: 0.3rem;"></div>
                    
                </div> 

                <div style="position: absolute;left: 330px;width: 1000px;top: 6px;">
                    <div class="cat turjawaliDisplay" style="margin-left: 10px;">
                        <label>
                            <input checked type="checkbox" value="" name="filter" id="turjawaliDisplay"><span><i class="fa fas fa-user-shield"></i> Petugas</span>
                        </label>
                    </div>
                    <div class="cat fasumKhususDisplay" style="margin-left: 10px;">
                        <label>
                            <input checked type="checkbox" value="fasum_khusus" name="filter" id="fasumKhususDisplay"><span><i class="fa far fa-building"></i> Fasum Khusus</span>
                        </label>
                    </div>
                    <div class="cat clusterDisplay" style="margin-left: 10px;">
                        <label>
                            <input checked type="checkbox" value="cluster" name="filter" id="clusterDisplay"><span><i class="fa fas fa-vector-square"></i> Cluster</span>
                        </label>
                    </div>
    
                    <div class="cat gpsIdDisplay" style="margin-left: 10px;">
                        <label>
                            <input checked type="checkbox" value="gpsId" name="gpsId" id="gpsIdDisplay"><span><i class="fa fas fa-car-side"></i> Kendaraan Listrik</span>
                        </label>
                    </div>
    
                    <div class="cat kegiatanDisplay">
                        <label>
                            <input type="checkbox" value="jadwal_kegiatan" name="filter" id="kegiatanDisplay"><span><i class="mdi mdi-card-account-details-star"></i> Jadwal Kegiatan</span>
                        </label>
                    </div>
    
                    <div class="cat cctvDisplay">
                        <label>
                            <input type="checkbox" checked value="cctv" name="filter" id="cctvDisplay"><span><i class="mdi mdi-camera-marker"></i> CCTV</span>
                        </label>
                    </div>
                    <div class="cat operasiDisplay">
                        <label>
                            <input type="checkbox" value="titik_laporan" name="filter" id="operasiDisplay"><span><i class="mdi mdi-clipboard-flow"></i> Laporan</span>
                        </label>
                    </div>
    
                    <div class="cat panicDisplay" style="margin-left: 10px;">
                        <label>
                            <input type="checkbox" value="titik_panicButton" name="filter" id="panicDisplay"><span><i class="mdi mdi-chat-alert"></i> Panic Button</span>
                        </label>
                    </div>

                </div>
                
                <div class="dropdown-menu" style="background: transparent; border: transparent; box-shadow: none;">
                    <div style="width: 308px; background-color: white;border-radius: 0.25rem;margin-left: 7px;margin-top: 0px;">
                        <div style="margin-left: 0px;overflow-x: scroll;height: 435px;scrollbar-width: thin;position: relative; padding: 15px;">
                            <form class="form" method="POST" enctype="multipart/form-data"> 
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
                                        <input type="checkbox"  name="filter" value="polres" id="polres" class="form-input" >  
                                        <span>Polres</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input type="checkbox" name="filter" value="instruksi" id="instruksi" class="form-input" >  
                                        <span>Instruksi</span> 
                                    </div>  
                                    <div class="col-md-6">
                                        <input type="checkbox" checked name="filter" value="" id="turjawali" class="form-input" >  
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
                                        <input type="checkbox" name="filter" value="cluster" id="cluster" class="form-input" >  
                                        <span>Cluster</span> 
                                    </div> 
                                    <div class="col-md-6">
                                        <input checked type="checkbox" name="filter" value="gpsId" id="gpsId" class="form-input" >  
                                        <span>Kendaraan Listrik</span> 
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

                

                

                

               
                
            </div>  
            
        </div>
        <div id="mapG20Dashboard">
        <div style="bottom: 10px;left: 10px;position: absolute;z-index: 999;/*! text-align: end; */"> 
            <img src="<?= base_url()?>assets/legenda_web.png" style="width: 12vw;"/>
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
                <h4 class="modal-title text-white" id="myLargeModalLabel">Turjawali Filter <button class="btn" style="margin-left: -10px;margin-top: -5px;">
                    <i class="mdi mdi-restore" style="font-size: 20px;color: white;"></i>
                    </button>
                </h4>
                <button type="button" class="btn-close btn-close-white" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
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
                                        <ul class="list-group" id="listJadwal" style="height: 400px;overflow-y: auto;scrollbar-width: thin;"> 
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Uraian Kegiatan &nbsp;<span class="badge bg-danger rounded-pill" id="totalRenpamOn"></span>
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
                                        
                                    </div> 
                                    <div class="list col-md-12 mb-3">
                                        <ul class="list-group" id="listRenpam" style="height: 400px;overflow-y: auto;scrollbar-width: thin;"> 
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading3">
                            <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                Personil Lantas &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasOn"></span>
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
                </div> -->

                <div class="accordion accordion-flush listCategoriSchedule" id="accordionFlushExample">
                    
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
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VVIP</label>
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
                                <input  type="text" name="note_kakor" class="form-control" id="note_kakor"> 
                                <label class="labelmui">Catatan Uraian Kegiatan</label>
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
                <h5 class="modal-title text-white" id="myLargeModalLabelNoteKakor">Tambah Catatan Uraian Kegiatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                <form class="formNoteKakor" method="post" enctype="multipart/form-data"> 
                    
                    <div class="row">   
                        <textarea hidden name="accountsNoteKakor" id="accountsNoteKakor" cols="5" rows="5"></textarea>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input hidden style="width: 100%;" name="id" id="idNoteKakor" placeholder="" type="text">
                                <input required  class="form-control" name="note_kakor" id="noteKakor" placeholder="" type="text">
                                <label for="noteKakor">Catatan Uraian Kegiatan</label>
                            </div> 
                        </div>
                        <div class="col-md-12" >
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
                <h5 class="modal-title text-white" id="myLargeModalLabelPetugas">Daftar Petugas Pengawalan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="isiModalPetugas"> 
                 
            </div>
        </div>
    </div>
</div>



<!-- MODAL FOR FILTER -->
<div class="modal right fade" id="myModalPetugasDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPetugasDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPetugasDisplay">Personil Lantas</h5>  &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalPetugasDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>

<div class="modal right fade" id="myModalFasumKhususDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelFasumKhususDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelFasumKhususDisplay">Fasilitas Khusus</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalFasumKhususDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalFasumKhususDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalClusterDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelClusterDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelClusterDisplay">Cluster</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalClusterDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalClusterDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalGpsIdDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelGpsIdDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelGpsIdDisplay">Kendaraan Listrik</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalGpsIdDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalGpsIdDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalJadwalDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelJadwalDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelJadwalDisplay">Jadwal Kegiatan</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalJadwalDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalJadwalDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalCctvDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelCctvDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelCctvDisplay">CCTV</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalCctvDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalCctvDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalLaporanDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelLaporanDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelLaporanDisplay">Laporan Operasi</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalLaporanDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalLaporanDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<div class="modal right fade" id="myModalPanicDisplay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelPanicDisplay" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabelPanicDisplay">Panic Button</h5>   &nbsp;<span class="badge bg-danger rounded-pill" id="totalPanicDisplay"></span>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="openModalPanicDisplay" style="width: 500px;">  
            </div>
        </div>
    </div>
</div>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

<script src="https://cdn.socket.io/4.5.3/socket.io.min.js" ></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script> -->

<!-- <script>
      
        var socket = io('http://103.163.139.100:3005/', {
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
    var socketGps = io('http://gps-so.korlantaspolri.id');

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


    var dummyGetTracking = new Array();
    var dummyIdTurjawali = new Array();

    var dummyIdKendaraanGpsId= new Array();
    var autoGpsId; 

    $(document).ready(function() {  


        

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
            layers: [trafficMutant]
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
            "Google Map Street Traffic": trafficMutantRoad,
            "Google Map Hybrid Traffic": trafficMutant,
            "MappBox Traffic": gl,
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
        socketKe2.on("connected", function(resSocket){
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


        function gpsId() { 
            fetch('<?php echo base_url()?>dataVendor/gpsId.json')
            .then((response) => response.json())
            .then((ress) => {
                // console.log(ress[0].VehicleNumber);
                var validasiId = dummyIdKendaraanGpsId.filter(function(val) {
                    return val == ress[0].VehicleId;
                });
                if(validasiId > 0){ 
                    // console.log('id sudah ada');
                }else{ 
                    dummyIdKendaraanGpsId.push(ress[0].VehicleId);
                    // console.log('id tidak ada');
                }
                
                var jenis = ``;

                if(ress[0].VehicleType == 'Motorcycle'){
                    jenis = `
                    <div>
                        <div>
                            <img src="<?php echo base_url();?>assets/icon/gpsIdMotor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                        </div>
                        <div style="margin-top: -30px;">
                        <span class="badge rounded-pill" style="background-color: #169fda">${ress[0].VehicleNumber}</span>
                        </div>
                    </div>`;
                }else{
                    jenis = `
                    <div>
                        <div>
                            <img src="<?php echo base_url();?>assets/icon/gpsIdMobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                        </div>
                        <div style="margin-top: -30px;">
                        <span class="badge rounded-pill" style="background-color: #169fda">${ress[0].VehicleNumber}</span>
                        </div>
                    </div>`;
                }
                if(markerGpsId[ress[0].VehicleId] != null){ 
                    var fotoPetugas = "";
                    markerGpsId[ress[0].VehicleId].setLatLng([ress[0].Lat,ress[0].Lon], { icon: L.divIcon({
                    // className: 'location-pin',
                    html: jenis,
                    iconSize: [5, 5],
                    iconAnchor: [5, 10]
                    // iconAnchor: [10, 33]
                    }) }).bindPopup(`
                        <div class="text-center" style="width: 300px;">  
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

                                <div class="col-md-12 text-center  mt-3">
                                    <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Kendaraan</span>  
                                    <p style="font-size: 12px;">${ress[0].GpsLocation}</p>
                                </div> 
                            </div> 
                                
                        </div>
                    `).update();  
                }else{  
                    markerGpsId[ress[0].VehicleId] = L.marker([ress[0].Lat,ress[0].Lon], { icon: L.divIcon({
                        // className: 'location-pin',
                        html: jenis,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                        // iconAnchor: [10, 33]
                        }) }).bindPopup(`
                        <div class="text-center" style="width: 300px;">  

                            
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

                                <div class="col-md-12 text-center  mt-3">
                                    <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Kendaraan</span>  
                                    <p style="font-size: 12px;">${ress[0].GpsLocation}</p>
                                </div> 
                            </div> 
                                
                        </div>
                    `).addTo(mapContainer);    
                }  
            });
        }


        autoGpsId = setInterval(gpsId, 5000);
        $("#gpsIdDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#gpsId").prop('checked', true); 
                autoGpsId = setInterval(gpsId, 5000); 
                $("#myModalGpsIdDisplay").modal('show');
            }else{
                $("#gpsId").prop('checked', false); 
                $("#gpsId").val(); 
                for (let i = 0; i < dummyIdKendaraanGpsId.length; i++) {  
                    mapContainer.removeLayer(markerGpsId[dummyIdKendaraanGpsId[i]]);
                }
                dummyIdKendaraanGpsId = new Array(); 
                markerGpsId = new Array();  
                clearInterval(autoGpsId);
            } 
        }); 


        function serverSideGet(){
            $("#overlay").fadeIn(300);   

            
            let countlist = 0;
            let list = "";

            let countlistDisplay = 0;
            let listDisplay = ""; 
            let countlistCar = 0;
            let listCar = ""; 
            let countlistBike = 0;
            let listBike = ""; 
            let countlistNon = 0;
            let listNon = ""; 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>dashboard/getTracking", 
                data : {
                    "status" : '1',
                }, 
                dataType : "JSON",
                success : function(result){  
                    $("#overlay").fadeOut(300); 
                    // console.log('get tracking');
                    dummyGetTracking = result['data'];  
                    let ress = dummyGetTracking; 
                    // console.log(ress);

                    var jenis = '';
                    var bendera = '';
 

                    $('#openModalPetugasDisplay').html(`
                        <table id="datatablePetugasOnDisplay" class="table dt-responsive w-100">
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
                    $('#totalPetugasDisplay').html(ress.length);
                    if (ress.length > 0) {    
                        for (let i = 0; i < ress.length; i++) {   

                            var validasiIdTurjal = dummyIdTurjawali.filter(function(val) {
                                return val == ress[i].id_officer;
                            });
                            if(validasiIdTurjal > 0){ 
                                // console.log('id sudah ada');
                            }else{ 
                                dummyIdTurjawali.push(ress[i].id_officer);
                                // console.log('id tidak ada');
                            }   

                            var cordLat = parseFloat(ress[i].latitude); 
                            var corLong = parseFloat(ress[i].longitude);  
                            
                            jenis = '';
                            if(ress[i].type_vehicle == 'Sepeda Motor'){
                                // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                                jenis = `
                                <div>
                                    <div>
                                        <img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                    </div>
                                    <div style="margin-top: -30px;">
                                    <span class="badge rounded-pill bg-primary">${ress[i].name_officer}</span>
                                    </div>
                                </div>`;
                            }else if(ress[i].type_vehicle == 'Mobil'){
                                jenis = `
                                <div>
                                    <div>
                                        <img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                    </div>
                                    <div style="margin-top: -30px;">
                                    <span class="badge rounded-pill bg-primary">${ress[i].name_officer}</span>
                                    </div>
                                </div>`;
                            }else{
                                // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                                jenis = `
                                <div>
                                    <div>
                                        <img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                                    </div>
                                    <div style="margin-top: -30px;">
                                    <span class="badge rounded-pill bg-primary">${ress[i].name_officer} </span>
                                    </div>
                                </div>`;
                            }

                            if(ress[i].photo_officer || ress[i].photo_officer != null){
                                fotoPetugas = `<img src="<?php echo url_api();?>officer/${ress[i].photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                                // console.log(`ada foto`);
                            }else{
                                fotoPetugas = `<img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                                // console.log(`ga ada foto`);
                            }

                            if(ress[i].name_country || ress[i].name_country != '-' || ress[i].name_country != null){
                                bendera = `${ress[i].name_country}`;
                            }else{
                                bendera = `-`; 
                            }

                            if(ress[i].photo_country || ress[i].photo_country != '-' || ress[i].photo_country != null){ 
                                fotoBendera = `<img src="${ress[i].photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                            }else{ 
                                fotoBendera = ``;
                            }

                            if(markerArray[ress[i].id_officer] != null){ 
                                var fotoPetugas = "";
                                markerArray[ress[i].id_officer].setLatLng([ress[i].latitude,ress[i].longitude], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: jenis,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                    <div class="text-center" style="width: 300px;"> 
                                        <div class="row mt-3"> 
                                            <div class="col-md-12">
                                                ${fotoBendera}
                                            </div>
                                            ${call_wa_dan_biasa(ress[i].handphone, ress[i].id_officer, 'no-encrypt')}
                                        </div>

                                        
                                        <div class="row text-start mt-3">
                                            <div class="col-md-4">
                                                <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-7">
                                                <span style="font-size: 12px;">${ress[i].rank_officer} - ${ress[i].name_officer}</span>
                                            </div>  
                                            
                                            <div class="col-md-4">
                                                <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-7">
                                                <span style="font-size: 12px;">${ress[i].pam_officer != null ? ress[i].pam_officer : '-'}</span>
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
                                            ${ress[i].status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                            </div> 

                                            <div class="col-md-12 text-center  mt-3">
                                                <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                <p style="font-size: 12px;" id="lokasiMarker${ress[i].id_officer}"></p>
                                            </div> 
                                        </div> 
                                          
                                    </div>
                                `).update().on('click', function(e) {
                                    // console.log(e.latlng);
                                    $.ajax({
                                        type : "POST",
                                        url : "<?php echo base_url();?>dashboard/getAddres", 
                                        data : {
                                            "lat" : e.latlng['lat'],
                                            "lng" : e.latlng['lng'],
                                        }, 
                                        dataType : "JSON",
                                        success : function(result){  
                                            // console.log(result['responseMessage']);
                                            $(`#lokasiMarker${ress[i].id_officer}`).html(`${result['responseMessage']}`);
                                        }
                                    });
                                });  
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
                                            <div class="col-md-12">
                                                ${fotoBendera}
                                            </div>
                                            ${call_wa_dan_biasa(ress[i].handphone, ress[i].id_officer, 'no-encrypt')}
                                        </div>

                                        
                                        <div class="row text-start mt-3">
                                            <div class="col-md-4">
                                                <span style="font-size: 12px;font-weight: bold;">Nama</span>  
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-7">
                                                <span style="font-size: 12px;">${ress[i].rank_officer} - ${ress[i].name_officer}</span>
                                            </div>  
                                           
                                            <div class="col-md-4">
                                                <span style="font-size: 12px;font-weight: bold;">PAM</span>  
                                            </div> 
                                            <div class="col-md-1">
                                                :
                                            </div>
                                            <div class="col-md-7">
                                                <span style="font-size: 12px;">${ress[i].pam_officer != null ? ress[i].pam_officer : '-'}</span>
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
                                            ${ress[i].status_login == 1 ? '<span class="badge rounded-pill bg-primary" style="font-size: 12px;">Aktif</span>' : '<span class="badge rounded-pill bg-danger" style="font-size: 12px;">Tidak Aktif</span>'}
                                            </div> 

                                            <div class="col-md-12 text-center  mt-3">
                                                <span class="badge rounded-pill bg-primary" style="font-size: 12px;">Lokasi Petugas</span>  
                                                <p style="font-size: 12px;" id="lokasiMarker${ress[i].id_officer}"></p>
                                            </div> 
                                        </div> 
                                          
                                    </div>
                                `).addTo(mapContainer).on('click', function(e) {
                                    // console.log(e.latlng);
                                    $.ajax({
                                        type : "POST",
                                        url : "<?php echo base_url();?>dashboard/getAddres", 
                                        data : {
                                            "lat" : e.latlng['lat'],
                                            "lng" : e.latlng['lng'],
                                        }, 
                                        dataType : "JSON",
                                        success : function(result){  
                                            // console.log(result['responseMessage']);
                                            $(`#lokasiMarker${ress[i].id_officer}`).html(`${result['responseMessage']}`);
                                        }
                                    });
                                });    
                            }
                        


                            let nomorDepan1 = ress[i].handphone.substring(0, 2);
                            var iniNomor;
                            if (nomorDepan1 === "62") {
                                iniNomor = ress[i].handphone;
                            } else if (nomorDepan1 === "08") {
                                iniNomor = "62" + ress[i].handphone.substring(1);
                            } else if (nomorDepan1 === "+6") {
                                iniNomor = ress[i].handphone.substring(1);
                            } else {
                                iniNomor = ress[i].handphone;
                            }
                            countlistDisplay += 1;
                            listDisplay += `  
                                <tr>
                                    <td> ${ress[i].status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${countlistDisplay}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 12px;">${countlistDisplay}</span>`} </td>
                                    <td><a href="<?php echo base_url()?>operasi/Petugas" target="_blank">${ress[i].rank_officer ? ress[i].rank_officer : '' } - ${ress[i].name_officer}</a></td>
                                    <td><a href="<?php echo base_url()?>operasi/Akun" target="_blank"> ${ress[i].name_country ? ress[i].name_country : '-'} </a></td>
                                    <td> 
                                        <div style="display: flex;">
                                                <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${iniNomor}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                <a href="https://t.me/+${iniNomor}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                <i class="fab fa-telegram"></i>
                                                </a>
                                                <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${ress[i].id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                    id="listPetugasClickDisplay${countlistDisplay}"   
                                                    data-nama="${ress[i].name_team}"  
                                                    data-akun="${ress[i].name_account}" 
                                                    data-nrp="${ress[i].nrp_user}"
                                                    data-telp="${iniNomor}"
                                                    data-cord="${ress[i].latitude},${ress[i].longitude}" >
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </button>
                                                <div class="switch" style="margin-left: -11px;">
                                                    <input class="flag" type="checkbox" id="flagDisplay${countlistDisplay}" 
                                                    data-id="${ress[i].id_officer}"  
                                                    data-nama="${ress[i].name_team}"  
                                                    data-akun="${ress[i].name_account}" 
                                                    data-nrp="${ress[i].nrp_user}"
                                                    data-telp="${iniNomor}"
                                                    data-cord="${ress[i].latitude},${ress[i].longitude}"
                                                    data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                    <label for="flagDisplay${countlistDisplay}"></label>
                                                </div>
                                            </div> 
                                    </td>
                                </tr>
                            `;
                            $('#isiModalPetugasDisplay').html(listDisplay);  
                        } 

                        for (let i = 0; i < ress.length; i++){ 
                            $(`#listPetugasClickDisplay${i+1}`).click(function(){   
                                // console.log('masuk');
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]); 
                                mapContainer.flyTo([latitude, longitude], 20);    
                            });

                            $(`#flagDisplay${i+1}`).on("change", function (e) {
                                // alert($(this).data('id'));
                                if($(`#flagDisplay${i+1}`).is(':checked')){
                                    mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickDisplay${i+1}`).hide();
                                }else{
                                    mapContainer.addLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickDisplay${i+1}`).show();
                                }
                            }); 
                        } 
                        $('#datatablePetugasOnDisplay').DataTable();

                        tablePutugasTrack = `
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingPetugasGetTrackCar">
                                    <button id="openPetugasGetTrackCar" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsePetugasGetTrackCar" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackCar">
                                        Jenis Kendaraan - Mobil &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasGetTrackCar"></span>
                                    </button>
                                </h2>
                                <div id="flush-collapsePetugasGetTrackCar" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackCar"
                                    data-bs-parent="#accordionFlushExampleCar">
                                    <div class="accordion-body text-muted">

                                        <table id="datatablePetugasGetTrackCar" class="table dt-responsive w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th> 
                                                    <th>Delegasi</th> 
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="listPetugasGetTrackCar">
                                            </tbody>
                                        </table> 
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingPetugasGetTrackBike">
                                    <button id="openPetugasGetTrackBike" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsePetugasGetTrackBike" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackBike">
                                        Jenis Kendaraan - Sepeda Motor &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasGetTrackBike"></span>
                                    </button>
                                </h2>
                                <div id="flush-collapsePetugasGetTrackBike" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugasGetTrackBike"
                                    data-bs-parent="#accordionFlushExampleBike">
                                    <div class="accordion-body text-muted">

                                        <table id="datatablePetugasGetTrackBike" class="table dt-responsive w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th> 
                                                    <th>Delegasi</th> 
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="listPetugasGetTrackBike">
                                            </tbody>
                                        </table> 
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingPetugasGetTrackNon">
                                    <button id="openPetugasGetTrackNon" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsePetugasGetTrackNon" aria-expanded="false" aria-controls="flush-collapsePetugasGetTrackNon">
                                        Jenis Kendaraan - Tanpa Kendaraan &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasGetTrackNon"></span>
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



                        countlist = 0;
                        list = "";
                        sortRess = ress.sort((a,b) => a.name_officer + b.name_officer);

                        var filterPetugasCar = sortRess.filter(function (e) {
                            return e.type_vehicle == 'Mobil';
                        }); 
                        var filterPetugasBike = sortRess.filter(function (e) {
                            return e.type_vehicle == 'Sepeda Motor';
                        }); 
                        var filterPetugasNon = sortRess.filter(function (e) {
                            return e.type_vehicle != 'Mobil' && e.type_vehicle != 'Sepeda Motor';
                        }); 
                        
                        
                        $("#totalPetugasOn").html(`${sortRess.length}`);
                        $("#totalPetugasGetTrackCar").html(`${filterPetugasCar.length}`);
                        $("#totalPetugasGetTrackBike").html(`${filterPetugasBike.length}`);
                        $("#totalPetugasGetTrackNon").html(`${filterPetugasNon.length}`);
 
                        // storeEditDayReport 
                        $.ajax({
                            type : "POST",
                            url : "<?php echo base_url();?>dashboard/storeEditDayReport", 
                            data : {
                                "t_officer_active" : sortRess.length,
                                "t_officer_active_car" : filterPetugasCar.length,
                                "t_officer_active_bike" : filterPetugasBike.length,
                                "t_officer_active_not_driving" : filterPetugasNon.length,
                            }, 
                            dataType : "JSON",
                            success : function(result){ 
                                if(result['status'] == true){
                                    console.log('update petugas aktif day report');
                                }else{
                                    console.log('GAGAL update petugas aktif day report');
                                }
                            }
                        });
          
                        filterPetugasCar.forEach(el => { 
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
                            countlistCar += 1;
                            listCar += `  
                                <tr>
                                    <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${countlistCar}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 12px;">${countlistCar}</span>`}</td>
                                    <td><a href="<?php echo base_url()?>operasi/Petugas" target="_blank"> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</a></td>
                                    <td><a href="<?php echo base_url()?>operasi/Akun" target="_blank"> ${el.name_country ? el.name_country : '-'} </a></td>
                                    <td> 
                                        <div style="display: flex;">
                                                <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                <i class="fab fa-telegram"></i>
                                                </a>
                                                <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                    id="listPetugasClickCar${countlistCar}"   
                                                    data-nama="${el.name_team}"  
                                                    data-akun="${el.name_account}" 
                                                    data-nrp="${el.nrp_user}"
                                                    data-telp="${el.handphone}"
                                                    data-cord="${el.latitude},${el.longitude}" >
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </button>
                                                <div class="switch" style="margin-left: -11px;">
                                                    <input class="flag" type="checkbox" id="flagCar${countlistCar}" 
                                                    data-id="${el.id_officer}"  
                                                    data-nama="${el.name_team}"  
                                                    data-akun="${el.name_account}" 
                                                    data-nrp="${el.nrp_user}"
                                                    data-telp="${el.handphone}"
                                                    data-cord="${el.latitude},${el.longitude}"
                                                    data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                    <label for="flagCar${countlistCar}"></label>
                                                </div>
                                            </div> 
                                    </td>
                                </tr>
                            `;
                            $('#listPetugasGetTrackCar').html(listCar); 
                        });   
                       
                        
                        for (let i = 0; i < countlistCar; i++){ 
                            $(`#listPetugasClickCar${i+1}`).click(function(){   
                                // console.log('masuk');
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]); 
                                mapContainer.flyTo([latitude, longitude], 20);    
                            });

                            $(`#flagCar${i+1}`).on("change", function (e) {
                                // alert($(this).data('id'));
                                if($(`#flagCar${i+1}`).is(':checked')){
                                    mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickCar${i+1}`).hide();
                                }else{
                                    mapContainer.addLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickCar${i+1}`).show();
                                }
                            });
 
                        } 
                        $('#datatablePetugasGetTrackCar').DataTable();



                        filterPetugasBike.forEach(el => { 
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
                            countlistBike += 1;
                            listBike += `  
                                <tr>
                                    <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${countlistBike}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 12px;">${countlistBike}</span>`}</td>
                                    <td> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</td>
                                    <td> ${el.name_country ? el.name_country : '-'}</td>
                                    <td> 
                                        <div style="display: flex;">
                                                <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                    <i class="fab fa-telegram"></i>
                                                </a>
                                                <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                    id="listPetugasClickBike${countlistBike}"   
                                                    data-nama="${el.name_team}"  
                                                    data-akun="${el.name_account}" 
                                                    data-nrp="${el.nrp_user}"
                                                    data-telp="${el.handphone}"
                                                    data-cord="${el.latitude},${el.longitude}" >
                                                    <i style="color: #495057;" class="fa fas fa-eye"></i>
                                                </button>
                                                <div class="switch" style="margin-left: -11px;">
                                                    <input class="flag" type="checkbox" id="flagBike${countlistBike}" 
                                                    data-id="${el.id_officer}"  
                                                    data-nama="${el.name_team}"  
                                                    data-akun="${el.name_account}" 
                                                    data-nrp="${el.nrp_user}"
                                                    data-telp="${el.handphone}"
                                                    data-cord="${el.latitude},${el.longitude}"
                                                    data-toggle="toggle"  data-onstyle="success" data-offstyle="danger" data-on="Approved" data-off="Not Approved" data-size="lg"> 
                                                    <label for="flagBike${countlistBike}"></label>
                                                </div>
                                            </div> 
                                    </td>
                                </tr>
                            `;
                            $('#listPetugasGetTrackBike').html(listBike); 
                        });   
                       
                        
                        for (let i = 0; i < countlistBike; i++){ 
                            $(`#listPetugasClickBike${i+1}`).click(function(){   
                                // console.log('masuk');
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]); 
                                mapContainer.flyTo([latitude, longitude], 20);    
                            });

                            $(`#flagBike${i+1}`).on("change", function (e) {
                                // alert($(this).data('id'));
                                if($(`#flagBike${i+1}`).is(':checked')){
                                    mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickBike${i+1}`).hide();
                                }else{
                                    mapContainer.addLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickBike${i+1}`).show();
                                }
                            });
 
                        } 
                        $('#datatablePetugasGetTrackBike').DataTable();


                        filterPetugasNon.forEach(el => { 
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
                            countlistNon += 1;
                            listNon += `  
                                <tr>
                                    <td>${el.status_login == 1 ? `<span class="badge rounded-pill bg-primary" style="font-size: 12px;">${countlistNon}</span>` : `<span class="badge rounded-pill bg-danger" style="font-size: 12px;">${countlistNon}</span>`}</td>
                                    <td> ${el.rank_officer ? el.rank_officer : '' } - ${el.name_officer}</td>
                                    <td> ${el.name_country ? el.name_country : '-'}</td>
                                    <td> 
                                        <div style="display: flex;">
                                                <a class="btn" style="margin-top: -7px; color: #495057;" href="https://api.whatsapp.com/send?phone=${el.handphone}" target="_blank"><i class="fa fas fa-phone "></i></a> 
                                                <a href="https://t.me/+${el.handphone}" target="_blank" style="margin-right: 10px;font-size: 17px;">
                                                <i class="fab fa-telegram"></i>
                                                </a>
                                                <a class="btn" style="margin-left: -13px;margin-top: -7px; color: #495057;" href="<?php echo base_url('zoom'); ?>" target="_blank" onClick="sendZoomNonEncrypt('${el.id_officer}')"><i class="fa  fas fa-video "></i></a> 
                                                <button class="btn" style="margin-left: -13px;margin-top: -13px;"
                                                    id="listPetugasClickNon${countlistNon}"   
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
                       
                        
                        for (let i = 0; i < countlistNon; i++){ 
                            $(`#listPetugasClickNon${i+1}`).click(function(){   
                                // console.log('masuk');
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]); 
                                mapContainer.flyTo([latitude, longitude], 20);    
                            });

                            $(`#flagNon${i+1}`).on("change", function (e) {
                                // alert($(this).data('id'));
                                if($(`#flagNon${i+1}`).is(':checked')){
                                    mapContainer.removeLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickNon${i+1}`).hide();
                                }else{
                                    mapContainer.addLayer(markerArray[$(this).data('id')]); 
                                    $(`#listPetugasClickNon${i+1}`).show();
                                }
                            });
 
                        } 
                        $('#datatablePetugasGetTrackNon').DataTable();

                    }else{ 
                        $("#overlay").fadeOut(300);  
                    } 
                },
                error: function () { 
                    $("#overlay").fadeOut(300);  
                    console.log("gagal connect Tracking");
                } 
            }); 
            
        }
        

        const call_wa_dan_biasa = (noTelp, officer_id, statusEncrypt) => {
            // let castNoTelp = noTelp.sub
            

            if(statusEncrypt == 'no-encrypt'){
                sendNotifZ = `onClick="sendZoomNonEncrypt('${officer_id}')"`;
            }else{
                sendNotifZ = `onClick="sendZoom('${officer_id}')"`;
            }

            if(noTelp != null){
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
            }else{
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
        }); 
        socketKe2.on('from server', function(ress) { 
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
        }); 

        socket.on('sendToAdminMobile', function(ress) { 
            console.log(`get Track Nama Petugas: B. ( ${ress.nrp_user} ${ress.name_officer} ) - ${ress.type_vehicle}`);
            // console.log(ress); 
            var flagVip = ''; 
            var iconflagVip = '';
             
            // console.log(result); 

            var cordLat = parseFloat(ress.latitude); 
            var corLong = parseFloat(ress.longitude); 
            var bendera = '';
            var jenis = ''; 


            var validasiIdTurjal = dummyIdTurjawali.filter(function(val) {
                return val == ress.id_officer;
            });
            if(validasiIdTurjal > 0){ 
                // console.log('id sudah ada');
            }else{ 
                dummyIdTurjawali.push(ress.id_officer);
                // console.log('id tidak ada');
            }   


            // for (let i = 0; i < ress.length; i++) {  
    
                    
                // if(ress.type_vehicle == 'Sepeda Motor'){
                //     // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                //     jenis = `<img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                // }else if(ress.type_vehicle == 'Mobil'){
                //     jenis = `<img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                // }else{
                //     // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                //     jenis = `<img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                // } 
                
                
             
                    if(flagVip != ''){
                        iconflagVip = `<div style="margin-top: -50px;margin-left: 6px;"><img src="<?php echo base_url();?>assets/icon/flags/4x3/${flagVip}.svg" style="width: 25px;height: 25px;" class="img-fluid rounded-circle d-block  float-center"></div>`; 
                    }else{
                        iconflagVip = `<div style="margin-top: -50px;margin-left: 6px; width: 25px;height: 25px;"></div>`;
                    }

                    jenis = '';
                    if(ress.type_vehicle == 'Sepeda Motor'){
                        // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                        jenis = `
                        <div>
                            <div style="position: relative;">
                            <img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                            </div>
                            ${iconflagVip}
                            <div style="position: absolute;margin-top: -7px;">
                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                            </div>
                        </div>`;
                    }else if(ress.type_vehicle == 'Mobil'){
                        jenis = `
                        <div>
                            <div style="position: relative;">
                            <img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                            </div>
                            ${iconflagVip}
                            <div style="position: absolute;margin-top: -7px;">
                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                            </div>
                        </div>`;
                    }else{
                        // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                        jenis = `
                        <div>
                            <div style="position: relative;">
                            <img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                            </div>
                            ${iconflagVip}
                            <div style="position: absolute;margin-top: -7px;">
                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                            </div>
                        </div>`;
                    }

                    if(ress.photo_officer || ress.photo_officer != null){
                        fotoPetugas = `<img src="<?php echo url_api();?>officer/${ress.photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                    }else{
                        fotoPetugas = `<img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                    }
                
                    

                    if(ress.name_country || ress.name_country != '-' || ress.name_country != null){
                        bendera = `${ress.name_country}`;
                    }else{
                        bendera = `-`; 
                    }

                    if(ress.photo_country || ress.photo_country != '-' || ress.photo_country != null){ 
                        fotoBendera = `<img src="${ress.photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                    }else{ 
                        fotoBendera = ``;
                    }
                  
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
                                    <div class="col-md-12">
                                        ${fotoBendera}
                                    </div>
                                    ${call_wa_dan_biasa(ress.handphone, ress.id_officer , 'no-encrypt')}
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
                        `).update().on('click', function(e) {
                            // console.log(e.latlng);
                            $.ajax({
                                type : "POST",
                                url : "<?php echo base_url();?>dashboard/getAddres", 
                                data : {
                                    "lat" : e.latlng['lat'],
                                    "lng" : e.latlng['lng'],
                                }, 
                                dataType : "JSON",
                                success : function(result){  
                                    // console.log(result['responseMessage']);
                                    $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                }
                            });
                        });    
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
                                type : "POST",
                                url : "<?php echo base_url();?>dashboard/getAddres", 
                                data : {
                                    "lat" : e.latlng['lat'],
                                    "lng" : e.latlng['lng'],
                                }, 
                                dataType : "JSON",
                                success : function(result){  
                                    // console.log(result['responseMessage']);
                                    $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                }
                            });
                        });     
                    } 
            

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


            var validasiIdTurjal = dummyIdTurjawali.filter(function(val) {
                return val == ress.id_officer;
            });
            if(validasiIdTurjal > 0){ 
                // console.log('id sudah ada');
            }else{ 
                dummyIdTurjawali.push(ress.id_officer);
                // console.log('id tidak ada');
            }   


            // for (let i = 0; i < ress.length; i++) {  
    
                    
                // if(ress.type_vehicle == 'Sepeda Motor'){
                //     // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                //     jenis = `<img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                // }else if(ress.type_vehicle == 'Mobil'){
                //     jenis = `<img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                // }else{
                //     // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                //     jenis = `<img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">`;
                // } 
                
                
             
                    if(flagVip != ''){
                        iconflagVip = `<div style="margin-top: -50px;margin-left: 6px;"><img src="<?php echo base_url();?>assets/icon/flags/4x3/${flagVip}.svg" style="width: 25px;height: 25px;" class="img-fluid rounded-circle d-block  float-center"></div>`; 
                    }else{
                        iconflagVip = `<div style="margin-top: -50px;margin-left: 6px; width: 25px;height: 25px;"></div>`;
                    }

                    jenis = '';
                    if(ress.type_vehicle == 'Sepeda Motor'){
                        // jenis = `<img src="<?php echo base_url();?>assets/admin/images/mobil.png"><div class="pin"></div><div class="pulse"></div>`;
                        jenis = `
                        <div>
                            <div style="position: relative;">
                            <img src="<?php echo base_url();?>assets/icon/motor.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                            </div>
                            ${iconflagVip}
                            <div style="position: absolute;margin-top: -7px;">
                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                            </div>
                        </div>`;
                    }else if(ress.type_vehicle == 'Mobil'){
                        jenis = `
                        <div>
                            <div style="position: relative;">
                            <img src="<?php echo base_url();?>assets/icon/mobil.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                            </div>
                            ${iconflagVip}
                            <div style="position: absolute;margin-top: -7px;">
                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                            </div>
                        </div>`;
                    }else{
                        // jenis = `<img src="<?php echo base_url();?>assets/admin/images/sepedaMotor.png"><div class="pin"></div><div class="pulse"></div>`
                        jenis = `
                        <div>
                            <div style="position: relative;">
                            <img src="<?php echo base_url();?>assets/icon/topi.png" style="width: 40px;margin-top: -45px;margin-left: -18.5px;">
                            </div>
                            ${iconflagVip}
                            <div style="position: absolute;margin-top: -7px;">
                            <span class="badge rounded-pill bg-primary">${ress.name_officer}</span>
                            </div>
                        </div>`;
                    }

                    if(ress.photo_officer || ress.photo_officer != null){
                        fotoPetugas = `<img src="<?php echo url_api();?>officer/${ress.photo_officer}" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                    }else{
                        fotoPetugas = `<img src="<?php echo base_url();?>assets/user.jpg" alt="" class="img-fluid rounded-circle d-block  float-center">`;
                    }
                
                    if(ress.name_country || ress.name_country != '-' || ress.name_country != null){
                        bendera = `${ress.name_country}`;
                    }else{
                        bendera = `-`; 
                    }

                    if(ress.photo_country || ress.photo_country != '-' || ress.photo_country != null){ 
                        fotoBendera = `<img src="${ress.photo_country}" alt="" style="width: 20%;margin-bottom: 10px;">`;
                    }else{ 
                        fotoBendera = ``;
                    }
                  
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
                                    <div class="col-md-12">
                                        ${fotoBendera}
                                    </div>
                                    ${call_wa_dan_biasa(ress.handphone, ress.id_officer , 'no-encrypt')}
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
                        `).update().on('click', function(e) {
                            // console.log(e.latlng);
                            $.ajax({
                                type : "POST",
                                url : "<?php echo base_url();?>dashboard/getAddres", 
                                data : {
                                    "lat" : e.latlng['lat'],
                                    "lng" : e.latlng['lng'],
                                }, 
                                dataType : "JSON",
                                success : function(result){  
                                    // console.log(result['responseMessage']);
                                    $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                }
                            });
                        });    
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
                                type : "POST",
                                url : "<?php echo base_url();?>dashboard/getAddres", 
                                data : {
                                    "lat" : e.latlng['lat'],
                                    "lng" : e.latlng['lng'],
                                }, 
                                dataType : "JSON",
                                success : function(result){  
                                    // console.log(result['responseMessage']);
                                    $(`#lokasiMarker${ress.id_officer}`).html(`${result['responseMessage']}`);
                                }
                            });
                        });     
                    } 
            

            // } 
                 
        
        });

        
        socketGps.on('pub', function(ress){
            console.log('dari luar soket IO')
            console.log(ress);
        });


        $("#turjawaliDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#turjawali").prop('checked', true);  
                $("#myModalPetugasDisplay").modal('show');
                serverSideGet();
                // alert('openPetugas ON');
            }else{
                $("#turjawali").prop('checked', false); 
                $("#turjawali").val();  
                for (let i = 0; i < dummyIdTurjawali.length; i++) {  
                    mapContainer.removeLayer(markerArray[dummyIdTurjawali[i]]);
                } 
                markerArray = new Array();   
            } 
        });  

        $('#myModalPetugasDisplay').on('shown.bs.modal', function(e) {  
            
        });

        var centerMap = mapContainer.getCenter();
        var centerLat = centerMap['lat'];
        var centerLng = centerMap['lng'];  
        
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
                    <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="fa far fa-building "></i>${cluster.getChildCount()}</b>
                    </div>` 
                });
            }
        });

        

        function serverSideFilter(){
            // userDataTable.draw();

            $("#overlay").fadeIn(300);   
            arrayFilter = [];
            $("input:checkbox[name=filter]:checked").each(function(){
                arrayFilter.push($(this).val());
            });  
            // console.log(arrayFilter);

            arrayFilterFasumKategori = [];
            $("input:checkbox[name=filterFasumKateg]:checked").each(function(){
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
                    var ressCluster = result['data']['cluster'];
                    var ressTroublespot = result['data']['troublespot'];
                    var ressSchedule = result['data']['jadwal_kegiatan'];
                    var ressOperasi = result['data']['operasi'];
                    console.log(result['data']);

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
                                        html: `<img src="<?php echo base_url();?>assets/icon/polres.png" style="width: 22px;margin-top: -45px;margin-left: -18.5px;">`,
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
                            $('#openModalCctvDisplay').html(`
                                <table id="datatableCctvOnDisplay" class="table dt-responsive w-100">
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
                                        <td><a href="<?= base_url()?>masterdata/Cctv" target="_blank">${filterCctv[i].type_cctv}</a></td> 
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
                                if(filterCctv[i].ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                    resource = `<iframe id="myIframe" src="${filterCctv[i].link_cctv}" style="width: 300px; height: 250.25px;"></iframe>`;
                                }else{
                                    resource = `<img style="width: 300px;" src="${filterCctv[i].link_cctv}" />`;
                                }

                                cctvClusterGroup.addLayer( markerCCTV[i] = L.marker([latitudeCCTV,longitudeCCTV], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
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

                             
                            for (let i = 0; i < countCctvDisplay; i++) { 
                                // console.log(`${i+1}`);
                                $(`#flyToMapFilterCctv${i+1}`).on("click", function (e) {  
                                    var latlong =  $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);  
                                    mapContainer.flyTo([latitude, longitude], 20); 
                                });
                            }
                            $('#datatableCctvOnDisplay').DataTable(); 
                            mapContainer.addLayer(cctvClusterGroup);
                        }
                    } 


                    

                    if(ressLAP && ressLAP.length > 0){  
                        var filterLaporan = ressLAP.filter(function (e) {
                            return e.coordinate.latitude != "" && e.coordinate.longitude != "";
                        });   

 
                        if(filterLaporan.length > 0){  
                            $('#openModalLaporanDisplay').html(`
                                <table id="datatableLaporanOnDisplay" class="table dt-responsive w-100">
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
                                        <td><a href="<?= base_url()?>laporan/operasi/Detail/${filterLaporan[i].id}" target="_blank">${filterLaporan[i].code}</a></td> 
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
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kriminal.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporan[i].categori == 2){
                                    kategoriLaporan = 'Kecelakaan Lalu Lintas';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporan[i].categori == 3){
                                    kategoriLaporan = 'Bencana Alam';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - bencana alam.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporan[i].categori == 4){
                                    kategoriLaporan = 'Kemacetan';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporan[i].categori == 99){
                                    kategoriLaporan = 'Lainnya';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else{
                                    kategoriLaporan = 'Lainnya Other';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`;
                                }

                                console.log('ini laporan');

                                laporanClusterGroup.addLayer( markerLaporan[i] = L.marker([latitudeLapPnc,longitudeLapPnc], { icon: L.divIcon({
                                    // className: 'location-pin',
                                    html: `<img src="<?php echo base_url();?>assets/icon/laporan penugasan.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center;">
                                                <a href="<?php echo url_api()?>/laporan/${filterLaporan[i].foto}" target="_blank"><img src="<?php echo url_api()?>/laporan/${filterLaporan[i].foto}" class="avatar-xl rounded-circle img-thumbnail"></a>
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
                                        
                                `,{minWidth : 100,maxWidth : 560,width : 400}) 
                                ); 
                            }

                             
                            for (let i = 0; i < countLaporanDisplay; i++) { 
                                $(`#flyToMapFilterLaporan${i+1}`).on("click", function (e) {  
                                    var latlong =  $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);  
                                    mapContainer.flyTo([latitude, longitude], 20); 
                                });
                            }
                            $('#datatableLaporanOnDisplay').DataTable(); 
                            mapContainer.addLayer(laporanClusterGroup);
                        }

                    }

                    if(ressPanic && ressPanic.length > 0){  
                        var filterLaporanPanic = ressPanic.filter(function (e) {
                            return e.coordinate.latitude != "" && e.coordinate.longitude != "";
                        });   
                        
                        if(filterLaporanPanic.length > 0){  

                            $('#openModalPanicDisplay').html(`
                                <table id="datatablePanicOnDisplay" class="table dt-responsive w-100">
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
                                        <td><a href="<?= base_url()?>laporan/panic/Detail/${filterLaporanPanic[i].id}" target="_blank">${filterLaporanPanic[i].code}</a></td> 
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

                                if(filterLaporanPanic[i].categori == 1){
                                    kategoriLaporan = 'Tindakan Kriminal';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kriminal.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporanPanic[i].categori == 2){
                                    kategoriLaporan = 'Kecelakaan Lalu Lintas';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporanPanic[i].categori == 3){
                                    kategoriLaporan = 'Bencana Alam';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - bencana alam.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporanPanic[i].categori == 4){
                                    kategoriLaporan = 'Kemacetan';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else if(filterLaporanPanic[i].categori == 99){
                                    kategoriLaporan = 'Lainnya';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
                                }else{
                                    kategoriLaporan = 'Lainnya Other';
                                    iconLapPanic = `<img src="<?php echo base_url();?>assets/icon/panic button - kecelakaan.png" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`;
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
                                                <a href="<?php echo url_api()?>/laporan/${filterLaporanPanic[i].foto}" target="_blank"><img src="<?php echo url_api()?>/laporan/${filterLaporanPanic[i].foto}" class="avatar-xl rounded-circle img-thumbnail"></a>
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
                                        
                                `,{minWidth : 100,maxWidth : 560,width : 400}) 
                                );
                            }

                            
                            for (let i = 0; i < countPanicDisplay; i++) { 
                                $(`#flyToMapFilterPanic${i+1}`).on("click", function (e) {  
                                    var latlong =  $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);  
                                    mapContainer.flyTo([latitude, longitude], 20); 
                                });
                            }
                            $('#datatablePanicOnDisplay').DataTable();  
                            mapContainer.addLayer(panicClusterGroup);
                        }
 

                    }

                    if(ressCluster && ressCluster.length > 0){  
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
                                    <td><a href="<?= base_url()?>masterdata/Fasilitasumum/radius" target="_blank">${ressCluster[i].fasum_name}</a></td> 
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
                                var set = ressCluster[i].fasum_radius != null ? ressCluster[i].fasum_radius : 1 ;
                                markerCluster[i] = L.circle([latitudeCluster,longitudeCluster], 1000*set, {
                                            color: 'red',
                                            // fillColor: '#f03',
                                            weight: 0.1,
                                            fillOpacity: 0.2
                                        }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3"> 
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressCluster[i].fasum_name}</h5> 
                                                    <span>- ${ressCluster[i].category_fasum.name_category_fasum} : ${set} Kilometer-</span>
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
                                                            <p style="font-size: 12px;">${ressCluster[i].fasum_address}</p>
                                                        </div>
                                                    </div> 
                                                </div>   
                                            </div>
                                        </div> 
                                `,{minWidth : 100,maxWidth : 560,width : 400}).addTo(mapContainer); 
                        }

                       
                        for (let i = 0; i < countClusterDisplay; i++) { 
                            $(`#flyToMapFilterCluster${i+1}`).on("click", function (e) {  
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);  
                                mapContainer.flyTo([latitude, longitude], 14); 
                            });
                        }
                        $('#datatableClusterOnDisplay').DataTable();  
                    }

                    if(ressFasumKhusus && ressFasumKhusus.length > 0){  
                        $('#openModalFasumKhususDisplay').html(`
                            <table id="datatableFasumKhususOnDisplay" class="table dt-responsive w-100">
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
                                    <td><a href="<?= base_url()?>masterdata/Fasilitasumum" target="_blank">${ressFasumKhusus[i].fasum_name}</a></td> 
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
                                    html: `<img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" style="width: 40px; margin-top: -45px;margin-left: -18.5px;">`,
                                    iconSize: [5, 5],
                                    iconAnchor: [5, 10]
                                    // iconAnchor: [10, 33]
                                    }) }).bindPopup(`
                                        <div class="text-center" style="width: 300px;"> 
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                    <div class="avatar-xl me-3">
                                                        <img src="<?php echo url_api();?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mt-3">
                                                    <h5>${ressFasumKhusus[i].fasum_name}</h5> 
                                                    <span>- ${ressFasumKhusus[i].category_fasum.name_category_fasum} -</span>
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
                                `,{minWidth : 100,maxWidth : 560,width : 400})
                                );  
                        }

                         
                        for (let i = 0; i < countFasumKhususDisplay; i++) { 
                            $(`#flyToMapFilterFasumKhusus${i+1}`).on("click", function (e) {  
                                var latlong =  $(this).data('cord').split(',');
                                var latitude = parseFloat(latlong[0]);
                                var longitude = parseFloat(latlong[1]);  
                                mapContainer.flyTo([latitude, longitude], 17); 
                            });
                        }
                        $('#datatableFasumKhususOnDisplay').DataTable(); 
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
                            $('#openModalJadwalDisplay').html(`
                            <table id="datatableJadwalOnDisplay" class="table dt-responsive w-100">
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
                                        <td><a href="<?= base_url()?>operasi/Kegiatan/Detail/${filterSchedule[i].id}" target="_blank">${filterSchedule[i].activity}</a></td> 
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
                                var latlongJadwal =  cordinateJadwal.split(',');
                                var latitudeJadwal = parseFloat(latlongJadwal[0]);
                                var longitudeJadwal = parseFloat(latlongJadwal[1]);
                                var iconJadwal = '';
                                
                                if(filterSchedule[i].id_category_schedule == '4'){
                                    iconJadwal = `<img src="<?php echo url_api();?>schedule/${filterSchedule[i].photo_schedule}" style="width: 30px;margin-top: -35px;margin-left: -13.5px;">`;
                                }else{
                                    iconJadwal = `<img src="<?php echo url_api();?>schedule/${filterSchedule[i].photo_schedule}" style="width: 22px;margin-top: -45px;margin-left: -9.5px;">`;
                                }

                                jadwalClusterGroup.addLayer( markerJadwal[i] = L.marker([latitudeJadwal,longitudeJadwal], { icon: L.divIcon({
                                        // className: 'location-pin',
                                        html: iconJadwal,
                                        iconSize: [5, 5],
                                        iconAnchor: [5, 10]
                                        // iconAnchor: [10, 33]
                                        }) }).bindPopup(`
                                            <div class="text-center" style="width: 300px;"> 
                                                <div class="row mt-3"> 
                                                    <div class="col-md-12 col-12" style="margin-left: 110px;margin-bottom: 10px;margin-top: 10px;">
                                                        <div class="avatar-xl me-3">
                                                            <img src="<?php echo url_api();?>schedule/${filterSchedule[i].photo_schedule}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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

                             
                            for (let i = 0; i < countJadwalDisplay; i++) { 
                                $(`#flyToMapFilterJadwal${i+1}`).on("click", function (e) {  
                                    var latlong =  $(this).data('cord').split(',');
                                    var latitude = parseFloat(latlong[0]);
                                    var longitude = parseFloat(latlong[1]);  
                                    mapContainer.flyTo([latitude, longitude], 20); 
                                });
                            }
                            $('#datatableJadwalOnDisplay').DataTable(); 
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
                // $("#myModalCctvDisplay").modal('show');
            }else{
                $("#cctvDisplay").prop('checked', false); 
                $("#cctvDisplay").val();
            }
            if($("#fasum_khusus").is(':checked')){ 
                $("#fasumKhususDisplay").prop('checked', true); 
                // $("#myModalFasumKhususDisplay").modal('show');
            }else{
                $("#fasumKhususDisplay").prop('checked', false); 
                $("#fasumKhususDisplay").val();
            }
            if($("#cluster").is(':checked')){ 
                $("#clusterDisplay").prop('checked', true); 
                // $("#myModalClusterDisplay").modal('show');
            }else{
                $("#clusterDisplay").prop('checked', false); 
                $("#clusterDisplay").val();
            }
            if($("#jadwal").is(':checked')){ 
                $("#kegiatanDisplay").prop('checked', true); 
                // $("#myModalJadwalDisplay").modal('show');
            }else{
                $("#kegiatanDisplay").prop('checked', false); 
                $("#kegiatanDisplay").val();
            }
            if($("#panic").is(':checked')){ 
                $("#panicDisplay").prop('checked', true); 
                // $("#myModalPanicDisplay").modal('show');
            }else{
                $("#panicDisplay").prop('checked', false); 
                $("#panicDisplay").val();
            }
            if($("#operasi").is(':checked')){ 
                $("#operasiDisplay").prop('checked', true); 
                // $("#myModalLaporanDisplay").modal('show');
            }else{
                $("#operasiDisplay").prop('checked', false); 
                $("#operasiDisplay").val();
            } 
            if($("#gpsId").is(':checked')){ 
                $("#gpsIdDisplay").prop('checked', true); 
                // $("#myModalGpsIdDisplay").modal('show');
                autoGpsId = setInterval(gpsId, 5000); 
            }else{
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
        


        $("#fasumKhususDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#fasum_khusus").prop('checked', true); 
                $("#myModalFasumKhususDisplay").modal('show');
            }else{
                $("#fasum_khusus").prop('checked', false); 
                $("#fasum_khusus").val();
            }
            serverSideFilter();
        }); 
        $("#kegiatanDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#jadwal").prop('checked', true); 
                $("#myModalJadwalDisplay").modal('show');
            }else{
                $("#jadwal").prop('checked', false); 
                $("#jadwal").val();
            }
            serverSideFilter();
        }); 
        $("#cctvDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#cctv").prop('checked', true); 
                $("#myModalCctvDisplay").modal('show');
            }else{
                $("#cctv").prop('checked', false); 
                $("#cctv").val();
            }
            serverSideFilter();
        });
        $("#clusterDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#cluster").prop('checked', true); 
                $("#myModalClusterDisplay").modal('show');
            }else{
                $("#cluster").prop('checked', false); 
                $("#cluster").val();
            }
            serverSideFilter();
        });
        $("#panicDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#panic").prop('checked', true); 
                $("#myModalPanicDisplay").modal('show');
            }else{
                $("#panic").prop('checked', false); 
                $("#panic").val();
            }
            serverSideFilter();
        });
        $("#operasiDisplay").on("change", function (e) {   
            if($(this).is(':checked')){ 
                $("#operasi").prop('checked', true); 
                $("#myModalLaporanDisplay").modal('show');
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
        //                             html: `<img src="<?php echo base_url();?>assets/icon/jadwal kegiatan.png" style="width: 22px;margin-top: -45px;margin-left: -18.5px;">`,
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










        // var dummyDataJadwal = [];
        var openMyModalFilter = false;
        $('#myModalFilter').on('shown.bs.modal', function(e) {  
            
            if(openMyModalFilter == false){
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
                    type : "POST",
                    url : "<?php echo base_url();?>dashboard/getCategorySchedule", 
                    data : {
                        "status" : '1',
                    }, 
                    dataType : "JSON",
                    success : function(result){  
                        let ress = result['data'];
                        // console.log(ress); 
                     
                        countlistCategori = 0;
                        listCategori = "";  
     
    
                        
                        // dataGroupBy.forEach(el => {
                        listCategori = `
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingPetugas">
                                    <button id="openPetugas" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsePetugas" aria-expanded="false" aria-controls="flush-collapsePetugas">
                                        Personil Lantas &nbsp;<span class="badge bg-danger rounded-pill" id="totalPetugasOn"></span>
                                    </button>
                                </h2>
                                <div id="flush-collapsePetugas" class="accordion-collapse collapse" aria-labelledby="flush-headingPetugas"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-muted">

                                        <div id="dataPetugasTrack">
                                        </div>

                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingUraianNonKegiatan">
                                    <button id="openUraianNonKegiatan" class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseUraianNonKegiatan" aria-expanded="false" aria-controls="flush-collapseUraianNonKegiatan">
                                        Tidak Terjadwal &nbsp;<span class="badge bg-danger rounded-pill" id="totalUraianNonKegiatan"></span>
                                    </button>
                                </h2>
                                <div id="flush-collapseUraianNonKegiatan" class="accordion-collapse collapse" aria-labelledby="flush-headingUraianNonKegiatan"
                                    data-bs-parent="#accordionFlushExample">
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
                        `;
                        for (let i = 0; i < ress.length; i++){ 
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
                            serverSideGet(); 
                        });
                    
    
                        var countlistCategoriByCateg = 0;
                        var listCategoriByCateg = ""; 

                        


                        for (let m = 0; m < ress.length; m++){
                            $(`#openCateg${ress[m]['id']}`).on('click', function(e) {

                                countlistCategoriByCateg = 0;
                                // if(openGet1 == false){
                                    $("#overlay").fadeIn(300);
                                    // openGet1 = true;
                                    listCategoriByCateg = ""; 
                                    $.ajax({
                                        type : "POST",
                                        url : "<?php echo base_url();?>dashboard/getJadwalId", 
                                        data : {
                                            "id_category_schedule" : `${ress[m]['id']}`,
                                        }, 
                                        dataType : "JSON",
                                        success : function(result){
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
        
                                            var dummyName = [];
                                            var dummyType = [];
                                            var dummyAwal = [];
                                            var dummyAkhir = [];
        
                                            var dummy= []; 
                                            var dummy1= []; 
                                            var dummy2= []; 
                                            var dummy3= []; 
                                            var dummy4= []; 
                                            
        
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
        
                                                dummy= []; 
                                                dummy1= []; 
                                                dummy2= []; 
                                                dummy3= []; 
                                                dummy4= []; 

                                                route = []; 
                                                route1 = []; 
                                                route2 = []; 
                                                route3 = []; 
                                                route4 = []; 
        
                                                dummyRenpam = ''; 
        
                                                checkedRoutJadwal.push({
                                                    activity : el.activity,
                                                    checked : 0,
                                                });
        
                                                countlist += 1;
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
        
        
                                                
                                                var totalJadwalRenpam = el.renpams.length;
                                                countlistCategoriByCateg += 1; 

                                                if(el.renpams.length > 0){ 
                                                
                                                    var sortUrutanRenpam = el.renpams.sort((a,b) => a.order_renpam + b.order_renpam);
                                                    // console.log({a:`urutan`, b:sortUrutanRenpam});
                                                    for (let i = 0; i < sortUrutanRenpam.length; i++){  
                                                    
                                                        countlistRenpam += 1;

                                                        checkedRenpam1.push({
                                                            name_renpam : sortUrutanRenpam[i]['name_renpam'],
                                                            checked : 0,
                                                        }); 

                                                        dummyName.push(sortUrutanRenpam[i]['name_renpam']);
                                                        dummyType.push(sortUrutanRenpam[i]['type_renpam']);
                                                        dummyAwal.push(sortUrutanRenpam[i]['awal_renpam']);
                                                        dummyAkhir.push(sortUrutanRenpam[i]['akhir_renpam']);
        
                                                        nameJadwalRenpam[countlist] = dummyName;
                                                        typeJadwalRenpam[countlist] = dummyType; 
                                                        awalJadwalRenpam[countlist] = dummyAwal; 
                                                        akhirJadwalRenpam[countlist] = dummyAkhir; 
        
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
                                                        if(sortUrutanRenpam[i]['accounts'].length > 0){ 
                                                            dataAccounts = sortUrutanRenpam[i]['accounts'];
                                                        }else{
                                                            dataAccounts = [];
                                                        }

                                                        // console.log(dummyJadwalRenpam);

                                                        var dataVIP = '';
                                                        if(sortUrutanRenpam[i]['vips'].length > 0){ 
                                                            for (let ii = 0; ii < sortUrutanRenpam[i]['vips'].length; ii++){  
                                                                dataVIP += `${sortUrutanRenpam[i]['vips'][ii]['name_vip']} - (${sortUrutanRenpam[i]['vips'][ii]['country_arrival_vip']}),`;
                                                            }
                                                        }else{
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
                                                                    data-awal="${sortUrutanRenpam[i]['title_start']}" 
                                                                    data-akhir="${sortUrutanRenpam[i]['title_end']}"> 
                                                                   
                                                                </td>
                                                                <td>${i+1}</td> 
                                                                <td>${dataVIP}</td>
                                                                <td><a href="<?= base_url()?>operasi/Renpam/edit/${sortUrutanRenpam[i]['id']}" target="_blank">${sortUrutanRenpam[i]['title_start']} Ke ${sortUrutanRenpam[i]['title_end']}</a></td>
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
                                                     
                                                }else{
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
                                                                            <a style="margin-top: 1px;" target="_blank" href="<?= base_url()?>operasi/Kegiatan/edit/${el.id}">${el.activity}</br>${el.date_schedule} - ${el.start_time.substr(0, 5)} s/d ${el.end_time.substr(0, 5)}</a>
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

                                         
                                            
        
                                            for (let i = 0; i < countlistRenpam; i++){ 
                                                $(`#listRenpamModalClick${ress[m]['id']}${i+1}`).on("change", function (e) { 
                                                    console.log(checkedRenpam1);  
                                                    //Find index of specific object using findIndex method.    
                                                    objIndex = checkedRenpam1.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                                    console.log(objIndex);

                                                    //Log object to Console.
                                                    console.log("Before update: ", checkedRenpam1[objIndex]);

                                                    //Update object's name property.
                                                    if($(this).is(':checked')){  
                                                        checkedRenpam1[objIndex].checked = 1;
                                                    }else{
                                                        checkedRenpam1[objIndex].checked = 0;
                                                    } 

                                                    //Log object to console again.
                                                    console.log("After update: ", checkedRenpam1[objIndex]);
                                                    
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
                                                        markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                        markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                        markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                    }

                                                    var cordRute1 = $(this).data('cord1'); 
                                                    if(cordRute1 != null && cordRute1[0]['latLng'] != null){ 
                                                        if($(this).is(':checked')){   
                                                            routingRenpam1[i] = null;
                                                            routingRenpam1[i] = L.Routing.control({
                                                                show:false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute1,
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
                                                        }else{ 
                                                            mapContainer.removeControl(routingRenpam1[i]);  
                                                        }
                                                        
                                                        
                                                    }else{ 
                                                    }

                                                    var cordRute2 = $(this).data('cord2'); 
                                                    if(cordRute2 != null && cordRute2[0]['latLng'] != null){ 
                                                        if($(this).is(':checked')){   
                                                            routingRenpam2[i] = null;
                                                            routingRenpam2[i] = L.Routing.control({
                                                                show:false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute2,
                                                                router: new L.Routing.osrmv1({
                                                                    language: 'en',
                                                                    profile: 'car'
                                                                }),
                                                                lineOptions: {
                                                                    styles: [{color: "#808080", weight: 5, className: 'animateRoute'}] 
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
                                                        }else{ 
                                                            mapContainer.removeControl(routingRenpam2[i]);  
                                                        }
                                                        
                                                        
                                                    }else{ 
                                                    }

                                                    var cordRute3 = $(this).data('cord3'); 
                                                    if(cordRute3 != null && cordRute3[0]['latLng'] != null){ 
                                                        if($(this).is(':checked')){   
                                                            routingRenpam3[i] = null;
                                                            routingRenpam3[i] = L.Routing.control({
                                                                show:false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute3,
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
                                                        }else{ 
                                                            mapContainer.removeControl(routingRenpam3[i]);  
                                                        }
                                                        
                                                        
                                                    }else{ 
                                                    }

                                                    var cordRute4 = $(this).data('cord4'); 
                                                    if(cordRute4 != null && cordRute4[0]['latLng'] != null){ 
                                                        if($(this).is(':checked')){   
                                                            routingRenpam4[i] = null;
                                                            routingRenpam4[i] = L.Routing.control({
                                                                show:false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRute4,
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
                                                        }else{ 
                                                            mapContainer.removeControl(routingRenpam4[i]);  
                                                        }
                                                        
                                                        
                                                    }else{ 
                                                    }

                                                    var cordRuteUtama = $(this).data('cord'); 
                                                    if(cordRuteUtama != null && cordRuteUtama[0]['latLng'] != null){ 
                                                        if($(this).is(':checked')){   
                                                            routingRenpam[i] = null;
                                                            routingRenpam[i] = L.Routing.control({
                                                                show:false,
                                                                draggableWaypoints: false,
                                                                addWaypoints: false,
                                                                waypoints: cordRuteUtama,
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
                                                        }else{ 
                                                            mapContainer.removeControl(routingRenpam[i]);  
                                                        }
                                                        
                                                        
                                                    }else{ 
                                                    }
                                                });

                                                
                                            }   

                                            for (let i = 0; i < ressJadwalId.length; i++){ 
                                                // console.log(`listJadwalRenpamClick${ress[m]['id']}${i+1}`); 
                                                $(`.checkAll${ress[m]['id']}${i+1}`).on("change", function (e) { 
                                                    var checkboxes = $(`.checkRenpam`);
                                                    if($(this).is(':checked')){  
                                                        for (var i = 0; i < checkboxes.length; i++) {
                                                            if (checkboxes[i].type == 'checkbox' ) {
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
                                                 
                                                $(`#listJadwalRenpamClick${ress[m]['id']}${i+1}`).on("change", function (e) { 
                                                 
                                                    for (let ii = 0; ii < nameJadwalRenpam[i+1].length; ii++){
                                                        //Find index of specific object using findIndex method.    
                                                        objIndex = checkedRoutJadwal.findIndex((obj => obj.activity == ressJadwalId[i]['activity']));
                                                        // console.log(objIndex);
                        
                                                        //Log object to Console.
                                                        // console.log("Before update: ", checkedRoutJadwal[objIndex]);
                        
                                                        //Update object's name property.
                                                        if($(this).is(':checked')){  
                                                            checkedRoutJadwal[objIndex].checked = 1;
                                                        }else{
                                                            checkedRoutJadwal[objIndex].checked = 0;
                                                        } 
        
                                                        var titikAwal = nameJadwalRenpam[i+1][ii] == null ? '-' : nameJadwalRenpam[i+1][ii];
                                                        var titikAkhir = akhirJadwalRenpam[i+1][ii] == null ? '-' : akhirJadwalRenpam[i+1][ii];
        
                                                        // console.log(dummyJadwalRenpam[i+1][ii]);
        
                                                        var typeRenpam = typeJadwalRenpam[i+1][ii];
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
                                                            markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                            markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                            markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                                        }
        
        
                                                        if(dummyJadwalRenpam[i+1][ii] != null && dummyJadwalRenpam[i+1][ii].length > 0 && dummyJadwalRenpam[i+1][ii][0]['latLng'] != null){
                                                            
                                                            if($(this).is(':checked')){  
                                                                routingJadwalRenpam[`${i+1}${ii}`] = null;
                                                                routingJadwalRenpam[`${i+1}${ii}`] = L.Routing.control({
                                                                    show:false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpam[i+1][ii],
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
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer); 
                                                                // mapContainer.addControl(routingJadwalRenpam[`${i+1}${ii}`]);  
                                                                console.log('kebuka');
                                                            }else{
                                                                mapContainer.removeControl(routingJadwalRenpam[`${i+1}${ii}`]);   
                                                            }
                                                        }else{
                                                            console.log('error route utama'); 
                                                        } 
                                                    
                                                        if(dummyJadwalRenpamAlter[i+1][ii] != null && dummyJadwalRenpamAlter[i+1][ii].length > 0 && dummyJadwalRenpamAlter[i+1][ii][0]['latLng'] != null){
                                                            
                                                            if($(this).is(':checked')){  
                                                                routingJadwalRenpam1[`${i+1}${ii}`] = null;
                                                                routingJadwalRenpam1[`${i+1}${ii}`] = L.Routing.control({
                                                                    show:false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlter[i+1][ii],
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
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer); 
                                                                // mapContainer.addControl(routingJadwalRenpam1[`${i+1}${ii}`]);  
                                                            }else{
                                                                mapContainer.removeControl(routingJadwalRenpam1[`${i+1}${ii}`]);   
                                                            }
                                                        }else{
                                                            console.log('error route alternative 1'); 
                                                        } 
        
        
                                                        if(dummyJadwalRenpamAlterr[i+1][ii] != null && dummyJadwalRenpamAlterr[i+1][ii].length > 0 && dummyJadwalRenpamAlterr[i+1][ii][0]['latLng'] != null){
                                                            
                                                            if($(this).is(':checked')){  
                                                                routingJadwalRenpam2[`${i+1}${ii}`] = null;
                                                                routingJadwalRenpam2[`${i+1}${ii}`] = L.Routing.control({
                                                                    show:false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlterr[i+1][ii],
                                                                    router: new L.Routing.osrmv1({
                                                                        language: 'en',
                                                                        profile: 'car'
                                                                    }),
                                                                    lineOptions: {
                                                                        styles: [{color: "gray", weight: 5, className: 'animateRoute'}]
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
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer); 
                                                                // mapContainer.addControl(routingJadwalRenpam2[`${i+1}${ii}`]);  
                                                            }else{
                                                                mapContainer.removeControl(routingJadwalRenpam2[`${i+1}${ii}`]);   
                                                            }
                                                        }else{
                                                            console.log('error route  alternative 2'); 
                                                        }  
        
        
                                                        if(dummyJadwalRenpamAlterrr[i+1][ii] != null && dummyJadwalRenpamAlterrr[i+1][ii].length > 0 && dummyJadwalRenpamAlterrr[i+1][ii][0]['latLng'] != null){
                                                            
                                                            if($(this).is(':checked')){  
                                                                routingJadwalRenpam3[`${i+1}${ii}`] = null;
                                                                routingJadwalRenpam3[`${i+1}${ii}`] = L.Routing.control({
                                                                    show:false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlterrr[i+1][ii],
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
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer); 
                                                                // mapContainer.addControl(routingJadwalRenpam3[`${i+1}${ii}`]);  
                                                            }else{
                                                                mapContainer.removeControl(routingJadwalRenpam3[`${i+1}${ii}`]);   
                                                            }
                                                        }else{
                                                            console.log('error route Masyarakat'); 
                                                        } 
        
        
                                                        if(dummyJadwalRenpamAlterrrr[i+1][ii] != null && dummyJadwalRenpamAlterrrr[i+1][ii].length > 0 && dummyJadwalRenpamAlterrrr[i+1][ii][0]['latLng'] != null){
                                                            
                                                            if($(this).is(':checked')){  
                                                                routingJadwalRenpam4[`${i+1}${ii}`] = null;
                                                                routingJadwalRenpam4[`${i+1}${ii}`] = L.Routing.control({
                                                                    show:false,
                                                                    draggableWaypoints: false,
                                                                    addWaypoints: false,
                                                                    waypoints: dummyJadwalRenpamAlterrrr[i+1][ii],
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
                                                                    // geocoder: L.Control.Geocoder.nominatim({})
                                                                }).addTo(mapContainer); 
                                                                // mapContainer.addControl(routingJadwalRenpam4[`${i+1}${ii}`]);  
                                                            }else{
                                                                mapContainer.removeControl(routingJadwalRenpam4[`${i+1}${ii}`]);   
                                                            }
                                                        }else{
                                                            console.log('error route Umum'); 
                                                        } 
        
        
        
        
                                                    }
                    
                    
                                                });
        
                                                $(`#listJadwalClick${ress[m]['id']}${i+1}`).click(function(){   
                                                    var latlong =  $(this).data('cord').split(',');
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
                                type : "POST",
                                url : "<?php echo base_url();?>dashboard/getRenpam", 
                                data : {
                                    "status" : '1',  
                                    "schedule_id": 'null',
                                }, 
                                dataType : "JSON",
                                success : function(result){ 
                                    var ress = result['data']; 
                                    var listNonRenpam = '';
                                    var countlistNonRenpam = 0;
                                    var checkedNonRenpam = [];

                                
                                    $('#totalUraianNonKegiatan').html(ress.length);

                                    ress.forEach(el => {
                                        countlistNonRenpam += 1;
                                        var dataNonRenpamVIP = '';

                                        var dataNonRenpamAccounts; 
                                        if(el.accounts.length > 0){ 
                                            dataNonRenpamAccounts = el.accounts; 
                                        }else{
                                            dataNonRenpamAccounts = []; 
                                        }
                                        if(el.vips.length > 0){ 
                                            for (let ii = 0; ii < el.vips.length; ii++){  
                                                dataNonRenpamVIP += `${el.vips[ii]['name_vip']} - (${el.vips[ii]['country_arrival_vip']}),`;
                                            }
                                        }else{
                                            dataNonRenpamVIP = '-';
                                        }

                                        checkedNonRenpam.push({
                                            name_renpam : el.name_renpam,
                                            checked : 0,
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
                                                    data-awal="${el.title_start}" 
                                                    data-akhir="${el.title_end}"> 
                                                </td>
                                                <td>${countlistNonRenpam}</td> 
                                                <td>${dataNonRenpamVIP}</td>
                                                <td><a href="<?= base_url()?>operasi/Renpam/edit/${el.id}" target="_blank">${el.title_start} Ke ${el.title_end}</a></td>
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


                                    for (let i = 0; i < countlistNonRenpam; i++){ 
                                        $(`#listNonRenpamModalClick${i+1}`).on("change", function (e) { 
                                            console.log(checkedNonRenpam);  
                                            //Find index of specific object using findIndex method.    
                                            objIndex = checkedNonRenpam.findIndex((obj => obj.name_renpam == $(this).data('name')));
                                            // console.log(objIndex);

                                            //Log object to Console.
                                            console.log("Before update: ", checkedNonRenpam[objIndex]);

                                            //Update object's name property.
                                            if($(this).is(':checked')){  
                                                checkedNonRenpam[objIndex].checked = 1;
                                            }else{
                                                checkedNonRenpam[objIndex].checked = 0;
                                            } 

                                            //Log object to console again.
                                            // console.log("After update: ", checkedNonRenpam[objIndex]);
                                            
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
                                                markerType = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style=" display: none;"></div><div class="pulse"></div>`;
                                                markerTypeOther = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: gray; display: none;"></div><div class="pulse"></div>`;
                                                markerTypeEnd = `<img style=" display: none;" src="${iconMarkerRenpam}"><div class="pin" style="background: green; display: none;"></div><div class="pulse"></div>`;
                                            }

                                            var cordRute1 = $(this).data('cord1'); 
                                            if(cordRute1 != null && cordRute1[0]['latLng'] != null){ 
                                                if($(this).is(':checked')){   
                                                    routingRenpam1[i] = null;
                                                    routingRenpam1[i] = L.Routing.control({
                                                        show:false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: cordRute1,
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
                                                }else{ 
                                                    mapContainer.removeControl(routingRenpam1[i]);  
                                                }
                                                
                                                
                                            }else{ 
                                            }

                                            var cordRute2 = $(this).data('cord2'); 
                                            if(cordRute2 != null && cordRute2[0]['latLng'] != null){ 
                                                if($(this).is(':checked')){   
                                                    routingRenpam2[i] = null;
                                                    routingRenpam2[i] = L.Routing.control({
                                                        show:false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: cordRute2,
                                                        router: new L.Routing.osrmv1({
                                                            language: 'en',
                                                            profile: 'car'
                                                        }),
                                                        lineOptions: {
                                                            styles: [{color: "#808080", weight: 5, className: 'animateRoute'}] 
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
                                                }else{ 
                                                    mapContainer.removeControl(routingRenpam2[i]);  
                                                }
                                                
                                                
                                            }else{ 
                                            }

                                            var cordRute3 = $(this).data('cord3'); 
                                            if(cordRute3 != null && cordRute3[0]['latLng'] != null){ 
                                                if($(this).is(':checked')){   
                                                    routingRenpam3[i] = null;
                                                    routingRenpam3[i] = L.Routing.control({
                                                        show:false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: cordRute3,
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
                                                }else{ 
                                                    mapContainer.removeControl(routingRenpam3[i]);  
                                                }
                                                
                                                
                                            }else{ 
                                            }

                                            var cordRute4 = $(this).data('cord4'); 
                                            if(cordRute4 != null && cordRute4[0]['latLng'] != null){ 
                                                if($(this).is(':checked')){   
                                                    routingRenpam4[i] = null;
                                                    routingRenpam4[i] = L.Routing.control({
                                                        show:false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: cordRute4,
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
                                                }else{ 
                                                    mapContainer.removeControl(routingRenpam4[i]);  
                                                }
                                                
                                                
                                            }else{ 
                                            }

                                            var cordRuteUtama = $(this).data('cord'); 
                                            if(cordRuteUtama != null && cordRuteUtama[0]['latLng'] != null){ 
                                                if($(this).is(':checked')){   
                                                    routingRenpam[i] = null;
                                                    routingRenpam[i] = L.Routing.control({
                                                        show:false,
                                                        draggableWaypoints: false,
                                                        addWaypoints: false,
                                                        waypoints: cordRuteUtama,
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
                                                }else{ 
                                                    mapContainer.removeControl(routingRenpam[i]);  
                                                }
                                                
                                                
                                            }else{ 
                                            }
                                        });
                                    }  
                                }
                            });
                        });
                        
                        function clickJadwalRenpam(){
                            alert('ido');
                        }
                    }
                });


            } 
        });


        
        

        $('#myModalPetugas').on('shown.bs.modal', function(event) { 
            var myAccounts = $(event.relatedTarget).data('accounts'); 
            var modal          = $(this);

            // console.log(myAccounts);
            $("#overlay").fadeIn(300); 
            

            var isiTable = '';
            if(myAccounts.length > 0){
                for (let i = 0; i < myAccounts.length; i++){ 
                    $.ajax({
                        type : "POST",
                        url : "<?php echo base_url();?>dashboard/getAkunId", 
                        data : {
                            "id" : myAccounts[i]['id'],
                        }, 
                        dataType : "JSON",
                        success : function(result){
                            var ress = result['data'];
                            // console.log({a:'get akun Id', b:ress['officers']});
                            var getIdTracking = '';
                            for (let ii = 0; ii < ress['officers'].length; ii++){ 
                                $.ajax({
                                    type : "POST",
                                    url : "<?php echo base_url();?>dashboard/getTrackingName", 
                                    data : {
                                        "name_officer" : ress['officers'][ii]['name_officer'],
                                    }, 
                                    dataType : "JSON",
                                    success : function(result1){
                                        // console.log(result1);
                                        if(result1['data'] != null){
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
                                        }else{
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
                                        
                                        for (let x = 0; x < ress['officers'].length; x++){
                                            $(`#listPetugasClickModal${ress['officers'][x]['nrp_officer']}`).on("click", function (e) {
                                                var latlong =  $(this).data('cord').split(',');
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

                
                
                
            }else{ 
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
                    // "type" : $('#filterTypeRenpam').val(),
                    "schedule_id": 'notNull',
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
                                        title="Catatan Uraian Kegiatan" data-bs-toggle="modal" data-bs-target="#myModalNoteKakor">
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
                                            // geocoder: L.Control.Geocoder.nominatim({})
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
                                            // geocoder: L.Control.Geocoder.nominatim({})
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
                                            // geocoder: L.Control.Geocoder.nominatim({})
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
                                            // geocoder: L.Control.Geocoder.nominatim({})
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
                                            // geocoder: L.Control.Geocoder.nominatim({})
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
        //                         html: `<img src="<?php echo base_url();?>assets/icon/cctv.png" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`,
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
        //                             html: `<img src="<?php echo base_url();?>assets/icon/${logoMarker}" style="width: 22px; margin-top: -45px;margin-left: -18.5px;">`,
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
        //                             html: `<img src="<?php echo base_url();?>assets/icon/polres.png" style="width: 22px;margin-top: -45px;margin-left: -18.5px;">`,
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
            $( '[name=total_vehicle]' ).mask('000000000');
            $( '[name=order_renpam]' ).mask('000000000');
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
                geocoder: L.Control.Geocoder.nominatim({})
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

    



        serverSideGet();
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
                        // userDataTable.draw(); 
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

        $("#submitAlternative4").on('click', function(e){ 
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
        var modal          = $(this);

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


        function sendZoomNonEncrypt(id){
            $.ajax({ 
                type : "POST",
                url : "<?php echo base_url();?>dashboard/sendZoomNonEncrpyt", 
                data : {
                    "officer_id" : id,
                }, 
                dataType : "JSON",
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `Notifikasi Berhasil Terkirim`, 
                        '',
                        'success'
                        ).then(function() { 
                            // $(".TambahPetugas").modal('hide');
                            // userDataTable.draw(); 
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
        }

        function sendZoom(id){ 
            $.ajax({ 
                type : "POST",
                url : "<?php echo base_url();?>dashboard/sendZoom", 
                data : {
                    "officer_id" : id,
                }, 
                dataType : "JSON",
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `Notifikasi Berhasil Terkirim`, 
                        '',
                        'success'
                        ).then(function() { 
                            // $(".TambahPetugas").modal('hide');
                            // userDataTable.draw(); 
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

        } 

    
</script> 
