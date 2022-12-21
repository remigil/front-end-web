<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Jadwal Kegiatan</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Kegiatan</button>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3" style="display: flex;">
                    <input required class="form-control" type="date" id="startdate" name="startdate" value="<?= date('Y-m-d') ?>"> &nbsp;&nbsp;<span style="margin-top: 7px;">To</span>&nbsp;&nbsp;
                    <input required class="form-control" type="date" id="enddate" name="enddate" value="<?= date('Y-m-d') ?>">
                    &nbsp;&nbsp;<button class="btn btn-primary" id="searchtgl">Cari</button>
                </div>
            </div>

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <!-- <th>Nama VIP</th>
                        <th>Tim</th> -->
                        <th>Alamat Tujuan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Uraian Kegiatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Kegiatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="kegiatan" placeholder="" type="text">
                                <label class="labelmui">Kegiatan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_category" id="id_category" style="height: 200px;">
                                    <option selected value="">Pilih Kategori</option>
                                    <?php foreach ($data['getCategorySchedule'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_category_schedule']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Kategori</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date">
                                <label class="labelmui">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>">
                                <label class="labelmui">Waktu Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>">
                                <label class="labelmui">Waktu Selesai</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="address" placeholder="" type="text" required>
                                <label class="labelmui">Alamat</label>
                            </div>
                            <div class="list-group" id="listAddress"></div>
                        </div>
                        <div class="col-md-6" style="display: none;">
                            <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                                <label class="labelmui">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div id="mapG20Kegiatan" style="height: 400px">
                                <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
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


<div class="modal fade" id="myModalR" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Uraian Kegiatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formR" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                    <input hidden name="schedule_id" id="schedule_id" class="form-control" type="text">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="instruksiR" placeholder="" type="text">
                                <label class="labelmui">Uraian Kegiatan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="category_renpam" class="form-select" id="select">
                                    <option value="">Pilih Category Rengiat</option>
                                    <option selected value="1">Operasi</option>
                                    <option value="2">Harian</option>
                                </select>
                                <!-- <label class="labelmui">Categori Rengiat</label> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select required name="id_accountR[]" id="id_accountR" style="height: 200px;" multiple>
                                    <?php foreach ($data['getAccount'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_account']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Unit Pengawalan</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="dateR" id="datepicker" class="form-control" value="<?= date('Y-m-d') ?>" type="date">
                                <label class="labelmui">Tanggal</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="id_vipR[]" id="id_vipR" style="height: 200px" multiple>
                                    <?php foreach ($data['getVip'] as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name_vip']; ?> ( <?= $row['country_arrival_vip'] ?> )</option>
                                    <?php endforeach; ?>
                                </select>
                                <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VVIP</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="startTimeR" class="form-control" id="startTimeR" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>">
                                <label class="labelmui">Waktu Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-selectfield mb-3">
                                <select name="subjekR" class="form-select" id="select2" required>
                                    <option selected value="">Pilih Subjek</option>
                                    <option value="1">Patroli</option>
                                    <option value="2">Pengawalan</option>
                                    <option value="3">Penjagaan</option>
                                    <option value="4">Pengaturan</option>
                                    <option value="5">Penutupan</option>
                                    <!-- <option value="6">Jalur</option>  -->
                                </select>
                                <!-- <label class="labelmui">Subjek</label> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required style="width: 100%;" name="total_vehicle" placeholder="" type="text">
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
                        <div class="col-md-12">
                            <div class="material-textfield mb-3">
                                <input type="text" name="note_kakor" class="form-control" id="note_kakor">
                                <label class="labelmui">Instruksi Kakor</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="material-textfield mb-3">
                                <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo date('H:i') ?>" data-default="<?php echo date('H:i') ?>"> 
                                <label class="labelmui">Waktu Selesai</label>
                            </div>
                        </div> -->


                        <input hidden style="width: 100%;" name="ruteawalR" id="ruteawalR" placeholder="" type="text">
                        <textarea hidden name="coordsAlternative1" id="coordsAlternative1" cols="5" rows="5"></textarea>
                        <textarea hidden name="coordsAlternative2" id="coordsAlternative2" cols="5" rows="5"></textarea>
                        <textarea hidden name="coordsAlternative3" id="coordsAlternative3" cols="5" rows="5"></textarea>
                        <textarea hidden name="coordsAlternative4" id="coordsAlternative4" cols="5" rows="5"></textarea>
                    </div>

                    <div class="col-md-6" style="display: none;">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="cordinateR" id="cordinateR" placeholder="" type="text">
                            <label class="labelmui">Coordinate</label>
                        </div>
                    </div>


                    <div class="col-md-12 mt-3 float-end">
                        <div style="position: absolute;" id="btnRoute">
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: red" data-bs-toggle="modal" data-bs-target="#myModalUtama"> Rute Utama</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #b935b9" data-bs-toggle="modal" data-bs-target="#myModal1"> Rute Alternative</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: gray" data-bs-toggle="modal" data-bs-target="#myModal2"> Rute Escape</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #000dda" data-bs-toggle="modal" data-bs-target="#myModal3"> Rute Masyarakat</a>
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: #bdbd0b" data-bs-toggle="modal" data-bs-target="#myModal4"> Rute Umum</a>


                        </div>
                        <div style="position: absolute;" id="1titikbtn">
                            <a href="javascript:void(0);" class="btn btn-primary waves-effect" style="background: red" data-bs-toggle="modal" data-bs-target="#myModal1Titik"> Tambah Titik Penjagaan</a>
                        </div>
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal1Titik" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="myLargeModalLabel1Titik" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel1Titik">Tambah Titik Pengajagaan</h5>
                <!-- <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="addressR" name="addressR">
                            <label for="">Alamat</label>
                        </div>
                    </div>
                    <div id="listAddressR" class="col-md-12"></div>

                    <div class="col-md-12">
                        <div id="mapG20Kegiatan1Titik" style="height: 500px">
                            <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 46.5%;top: 37%;">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternative1Titik" data-bs-toggle="modal" data-bs-target="#myModalR">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

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
                        <div id="mapG20KegiatanUtama" style="height: 500px"></div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 float-end">
                    <button class="btn btn-primary float-end" id="submitAlternativeUtama" data-bs-toggle="modal" data-bs-target="#myModalR">Simpan</button>
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
                    <button class="btn btn-primary float-end" id="submitAlternative1" data-bs-toggle="modal" data-bs-target="#myModalR">Simpan</button>
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
                    <button class="btn btn-primary float-end" id="submitAlternative2" data-bs-toggle="modal" data-bs-target="#myModalR">Simpan</button>
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
                    <button class="btn btn-primary float-end" id="submitAlternative3" data-bs-toggle="modal" data-bs-target="#myModalR">Simpan</button>
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
                    <button class="btn btn-primary float-end" id="submitAlternative4" data-bs-toggle="modal" data-bs-target="#myModalR">Simpan</button>
                    <!-- <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal" style="margin: 5px">Kembali</button> -->
                </div>

            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="myModalRD" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Uraian Kegiatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input hidden type="text" id="schedule_id_detail">
                <table id="datatableRD" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tim</th>
                            <th>VIP</th>
                            <th>Subjek</th>
                            <th>Instruksi</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
    var userDataTable;
    var userDataTableRD;
    var ressFasumKhusus;

    $(document).ready(function() {
        // $('#datepicker').datepicker(); 
        $('#startTime').clockpicker({
            autoclose: true
        });
        $('#endTime').clockpicker({
            autoclose: true
        });

        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            buttons: ["excel", "csv", "pdf"],

            lengthMenu: [
                [10, 25, 50, 999999],
                [10, 25, 50, 'All'],
            ],

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

                url: '<?php echo base_url(); ?>operasi/Kegiatan/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    data.filterTgl = $('#startdate').val();

                    data.filterTgl2 = $('#enddate').val();

                    // data.filterStatus = $('[name=status]').val();

                    // data.filterName = $('[name=group_name]').val();

                    // data.filterPocName = $('[name=group_poc_name]').val();

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
                    data: 'activity'
                },
                // { data: 'namaVip'}, 
                // { data: 'account'},  
                {
                    data: 'address_schedule'
                },
                {
                    data: 'date_schedule'
                },
                {
                    data: 'waktu',
                    orderable: false
                },
                {
                    data: 'renpam',
                    orderable: false
                },
                {
                    data: 'status_schedule'
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
                $('.addRenpam').on('click', function(e) {
                    var id = $(this).data('id');
                    $('#schedule_id').val(id);
                    $("#myModalR").modal('show');
                });

                $('.detailRenpam').on('click', function(e) {
                    var id = $(this).data('id');
                    $('#schedule_id_detail').val(id);
                    $("#myModalRD").modal('show');
                });
            }

        });

        // var start = moment();
        // var end = moment(); 

        $("#searchtgl").on("click", function(e) {
            userDataTable.draw();
        });

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>operasi/renpam/getFasus",
            data: {
                "radius": 1,
            },
            dataType: "JSON",
            success: function(result) {
                ressFasumKhusus = result['data'];
            }
        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Kegiatan/store",
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
                            userDataTable.draw();
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


        $('[name=cordinate]').val('-8.451740, 115.089643');
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
        var mapContainer = L.map('mapG20Kegiatan', {
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
            position: 'topright'
        }).addTo(mapContainer);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainer);


        // Comment out the below code to see the difference.
        $('#myModal').on('shown.bs.modal', function() {
            mapContainer.invalidateSize();

            $('.dropify').dropify();
            new Choices('#id_category', {
                searchEnabled: true,
                removeItemButton: true,
                removeItems: true,
                itemSelectText: '',
                classNames: {
                    containerOuter: 'choices select-choices',
                },
            });


            let countlist = 0;
            let list = "";
            $('[name=address]').on("change", function(e) {
                // console.log(this.value);
                $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
                    console.log(ress);
                    countlist = 0;
                    list = "";

                    $('#listAddress').show();
                    if (ress.length > 0 || list == "") {
                        ress.forEach(el => {
                            countlist += 1;
                            list += `<a class="list-group-item" 
                            id="list${countlist}"   
                            data-alamat="${el.display_name}"
                            data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                            $('#listAddress').html(list);
                        });


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
                    } else {
                        countlist = 0;
                        list = "";
                        $('#listAddress').html(list);
                    }
                });

            });


            $('[name=cordinate]').on("change", function(e) {

                var cordLatLong = this.value.split(',');
                var cordLat = parseFloat(cordLatLong[0]);
                var corLong = parseFloat(cordLatLong[1]);

                // console.log({a:cordLat, b:corLong});

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                    $('[name=address]').val(data['display_name']);
                    mapContainer.flyTo([cordLat, corLong], 17);
                });
            });


            mapContainer.on("dragend", function(e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=address]').val(data['display_name']);

                });

            });

        });

    });







    let arrayWaypoint = [];
    var obj = {};

    $("#btnRoute").hide();
    $('#1titikbtn').hide();
    $('#myModalR').on('shown.bs.modal', function() {
        // console.log(arrayWaypoint);

        $('[name=total_vehicle]').mask('000000000');
        $('[name=order_renpam]').mask('000000000');

        $('#startTimeR').clockpicker({
            autoclose: true
        });

        new Choices('#select', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });

        new Choices('#select2', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });

        new Choices('#id_vipR', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });

        new Choices('#id_accountR', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });


        $('[name=subjekR]').on('change', function(e) {
            if (this.value == '3') {
                $("#btnRoute").hide();
                $('#1titikbtn').show();
            } else {
                $("#btnRoute").show();
                $('#1titikbtn').hide();
            }
        });


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
        var mapContainerInstruksi = L.map('mapG20KegiatanR', {
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
        }).addTo(mapContainerInstruksi);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerInstruksi);

        // mapContainerInstruksi.invalidateSize(); 

        var control = L.Routing.control({
            waypoints: arrayWaypoint,
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            showAlternatives: true,
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapContainerInstruksi);


        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapContainerInstruksi.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                control.spliceWaypoints(0, 1, e.latlng);
                mapContainerInstruksi.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                control.spliceWaypoints(control.getWaypoints().length - 1, 1, e.latlng);
                mapContainerInstruksi.closePopup();
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapContainerInstruksi);
        });
    });


    $(".formR").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();

        // var routeArray = new Array();
        // routeArray = control.getWaypoints();
        // $('#ruteawalR').val(JSON.stringify(routeArray)); 
        // alert('asa');

        var formData = new FormData($('.formR')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>operasi/Renpam/storeFromJadwal",
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
                        $("#myModalR").modal('hide');
                        userDataTable.draw();
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

    $('#myModalRD').on('shown.bs.modal', function() {

        userDataTableRD = $('#datatableRD').DataTable({

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

                url: '<?php echo base_url(); ?>operasi/Renpam/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    data.filterTgl = "";

                    data.filterTgl2 = "";

                    // data.filterStatus = $('[name=status]').val();

                    data.filterSchedule = $('#schedule_id_detail').val();

                    data.filterTypeRenpam = '';

                    data.filterCategoryRenpam = '';

                    // data.filterPocName = $('[name=group_poc_name]').val();

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
                    data: 'accounts',
                    orderable: false
                },
                {
                    data: 'vips',
                    orderable: false
                },
                {
                    data: 'type_renpam'
                },
                {
                    data: 'name_renpam'
                },
                {
                    data: 'lokasi'
                },
                {
                    data: 'date'
                },
                {
                    data: 'waktu',
                    orderable: false
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

            }

        });

        userDataTableRD.draw();
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



    $('#myModal1Titik').on('shown.bs.modal', function() {

        var initialCenter = [<?= $this->session->userdata['latlng_center'] ?>];
        var initialZoom = <?= $this->session->userdata['zoom_level'] ?>;
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
        var mapContainerRenpam1Titik = L.map('mapG20Kegiatan1Titik', {
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
        }).addTo(mapContainerRenpam1Titik);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(mapContainerRenpam1Titik);


        mapContainerRenpam1Titik.invalidateSize();



        let countlist = 0;
        let list = "";
        $('[name=addressR]').on("change", function(e) {
            // console.log(this.value);
            $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
                console.log(ress);
                countlist = 0;
                list = "";
                ress.forEach(el => {
                    countlist += 1;
                    list += `<a class="list-group-item" 
                    id="list${countlist}"   
                    data-alamat="${el.display_name}"
                    data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                    $('#listAddressR').html(list);
                });

                if (list == "") {
                    countlist = 0;
                    list = "";
                    $('#listAddressR').html(list);
                }
                $('#listAddressR').show();

                for (let i = 0; i < ress.length; i++) {
                    $(`#list${i+1}`).click(function() {
                        var latlong = $(this).data('cords').split(',');
                        var latitude = parseFloat(latlong[0]);
                        var longitude = parseFloat(latlong[1]);

                        var arrayCord = {
                            "lat": latitude,
                            "lng": longitude
                        };

                        // console.log({a:latitude, b:longitude});
                        $('[name=addressR]').val($(this).data('alamat'));
                        // $('[name=cordinateR]').val($(this).data('cords'));
                        $('[name=cordinateR]').val(JSON.stringify(arrayCord));

                        mapContainerRenpam1Titik.flyTo([latitude, longitude], 17);
                        list = "";
                        $('#listAddressR').html(list);
                        $('#listAddressR').hide();
                    });
                }
            });

        });


        $('[name=cordinateR]').on("change", function(e) {

            var cordLatLong = this.value.split(',');
            var cordLat = parseFloat(cordLatLong[0]);
            var corLong = parseFloat(cordLatLong[1]);

            // console.log({a:cordLat, b:corLong});

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                $('[name=addressR]').val(data['display_name']);
                mapContainerRenpam1Titik.flyTo([cordLat, corLong], 17);
            });
        });


        mapContainerRenpam1Titik.on("dragend", function(e) {

            var corLat = mapContainerRenpam1Titik.getCenter()['lat'];
            var corLng = mapContainerRenpam1Titik.getCenter()['lng'];
            var cord = `${corLat},${corLng}`;

            var arrayCord = {
                "lat": corLat,
                "lng": corLng
            };

            $('[name=cordinateR]').val(JSON.stringify(arrayCord));

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                $('[name=addressR]').val(data['display_name']);

            });

        });



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
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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
            `, {
                minWidth: 100,
                maxWidth: 560,
                width: 400
            }).addTo(mapContainerRenpam1Titik);
        }


        // var routeAlternative1Titik = L.Routing.control({
        //     waypoints: arrayWaypoint1Titik,
        //     router: new L.Routing.osrmv1({
        //         language: 'en',
        //         profile: 'car'
        //     }),
        //     geocoder: L.Control.Geocoder.nominatim({})
        // }).addTo(mapContainerRenpam1Titik);


        // function createButton(label, container) { 
        //     var btn = L.DomUtil.create('button', '', container);
        //     btn.setAttribute('type', 'button');
        //     btn.innerHTML = label;
        //     return btn;
        // }

        // mapContainerRenpam1Titik.on('click', function(e) {  
        //     var container = L.DomUtil.create('div'),
        //         startBtn = createButton('Start from this location', container), 
        //         destBtn = createButton('Go to this location', container);

        //     L.DomEvent.on(startBtn, 'click', function() {  

        //         routeAlternative1Titik.spliceWaypoints(0, 1, e.latlng);
        //         mapContainerRenpam1Titik.closePopup();
        //     }); 
        //     L.DomEvent.on(destBtn, 'click', function() { 

        //         routeAlternative1Titik.spliceWaypoints(routeAlternative1Titik.getWaypoints().length - 1, 1, e.latlng);
        //         mapContainerRenpam1Titik.closePopup();
        //     });
        //     L.popup()
        //         .setContent(container)
        //         .setLatLng(e.latlng)
        //         .openOn(mapContainerRenpam1Titik);


        // }); 

        $("#submitAlternative1Titik").on('click', function(e) {
            // routingAlternative1Titik = routeAlternative1Titik.getWaypoints();
            // $('#ruteawalR').val(JSON.stringify(routingAlternative1Titik));  
            // $("#myModal1").modal('hide');
        });
    });


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
        var mapContainerRenpamUtama = L.map('mapG20KegiatanUtama', {
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
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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

        $("#submitAlternativeUtama").on('click', function(e) {
            routingAlternativeUtama = routeAlternativeUtama.getWaypoints();
            $('#ruteawalR').val(JSON.stringify(routingAlternativeUtama));
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
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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
                                    <img src="<?php echo url_api(); ?>fasum_khusus/${ressFasumKhusus[i].fasum_logo}" alt="" class="img-fluid rounded-circle d-block  float-center" style="width: 100%;">
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

        $("#submitAlternative4").on('click', function(e) {
            routingAlternative4 = routeAlternative4.getWaypoints();
            $('#coordsAlternative4').val(JSON.stringify(routingAlternative4));
            // $("#myModal2").modal('hide');
        });
    });
</script>