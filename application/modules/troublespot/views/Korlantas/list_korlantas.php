<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row" style="width: 95%;">
            <div class="col-md-3">
                    <label for="waktu">Waktu</label>
                    <div id="reportrange" class="pull-right" style="border-radius: 0.25rem; height: 40px; background: #fff; cursor: pointer; padding: 10px 10px; border: 1px solid #ccc;">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                        <span></span> <b class="caret"></b>
                    </div>
                    <input hidden type="date" id="startdate" name="startdate">
                    <input hidden type="date" id="enddate" name="enddate">
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Jenis Permasalahan</label>
                    <select class="form-select">
                        <option>Semua Permasalahan</option>
                        <option>Permaslahan 1</option>
                        <option>Permaslahan 2</option>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">POLDA</label>
                    <select class="form-select">
                    <option selected="--">-- Pilih Polda --</option>
                    <option value="1">POLDA JAWA BARAT</option>
                    <option value="2">POLDA METRO JAYA</option>
                    <option value="3">POLDA BANTEN</option>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">POLRES</label>
                    <select class="form-select">
                        <option selected="--">-- Pilih Polres --</option>
                        <option>POLRESTABES BANDUNG</option>
                        <option>POLRESTA BOGOR</option>
                        <option>POLRES BOGOR</option>
                        <option>POLRESTA SUKABUMI</option>
                        <option>POLRES SUBANG</option>
                    </select>
                </div>
            </div>
            <div class="mt-3" id="mapG20Dashboard" style="width: 100%; height:50vh;"></div>
            <button class=" mt-3 btn btn-primary float-end"> Tampilkan </button>
        </div>
    </div>
    <!-- <a href="<?= base_url('troublespot/Tambah'); ?>"><button class="btn btn-sm btn-primary" type="button" style="height: 6vh;">Tambah Troublespot</button></a> -->
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".TambahTroublespot">Tambah Troublespot</button>
    <div class="card mt-2">
        <div class="card-body">
            <table id="datatable" class="table table-striped dt-responsive w-100">
                <thead>
                    <tr class="text-center">
                        <th >No</th>
                        <th>Nama Polda</th>
                        <th>Nama Polres</th>
                        <th>Lokasi Kejadian</th>
                        <th style="width: 15%;">Waktu Pengkajian</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                
            </table>

        </div>
    </div>
</div>
<!-- End Page -->

<div class="modal fade TambahTroublespot" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Troublespot</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="material-textfield">
                                    <input type="text" name="no_ts" id="" >
                                    <label for="" class="labelmui">No. TS</label>
                                </div>
                    </div>
                    
                    
                        <div class="col-md-6">
                                <div class="material-textfield">
                                    <input type="date" name="tanggal_pelaporan" id="" >
                                    <label for="" class="labelmui">Tanggal Pelaporan</label>
                            </div>    
                        </div>
                        <div class="col-md-6">
                        <div class="material-textfield">
                            <input type="text" name="nama_pelapor" id="" >
                            <label for="" class="labelmui">Nama Pelapor</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-selectfield">
                        <select class="form-select" name="polda" >
                        <option value="1">POLDA METRO JAYA</option>
                        <option value="2">POLDA JAWA BARAT</option>
                        <option value="3">POLDA JAWA TENGAH</option>
                        <option value="4">POLDA JAWA TIMUR</option>
                        </select>
                            <label for="" class="labelmui">Polda</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-selectfield">
                        <select class="form-select" name="polres">
                        <option value="1">POLRESTABES BANDUNG</option>
                        <option value="2">POLRES BOGOR</option>
                        <option value="3">POLRESTA BOGOR</option>
                        <option value="4">POLRESTA SUKABUMI</option>
                      
                        </select>
                            <label for="" class="labelmui">Polres</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input type="text" name="penyebab_kemacetan" id="" >
                            <label for="" class="labelmui">Penyebab Kemacetan</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="text" name="lokasi_kejadian" id="" >
                        <label for="" class="labelmui">Lokasi Kejadian</label>
                    </div>
                </div>
                
                
                    <div class="col-md-12 mt-3">
                            <div id="mapG20Dashboard" style="height: 250px"></div>
                        </div>
                        <div class="col-md-6">
                        <div class="material-textfield">
                            <input type="text" name="latitude" id="" >
                            <label for="" class=" labelmui">Latitude</label>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="material-textfield">
                            <input type="text" name="longitude" id="" >
                            <label for="" class=" labelmui">Longitude</label>
                        </div>
                    </div>
                <div class="col-md-12">
                        <div class="material-textfield">
                            <input type="text" name="keterangan" id="" >
                            <label for="" class=" labelmui">Keterangan</label>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="material-textfield">
                            <input type="text" name="permasalahan" id="" >
                            <label for="" class=" labelmui">Permasalahan</label>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="material-textfield">
                            <input type="text" name="rekomendasi" id="" >
                            <label for="" class=" labelmui">rekomendasi</label>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="material-textfield">
                            <input type="text" name="tindakan" id="" >
                            <label for="" class=" labelmui">Tindakan</label>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="material-textfield">
                            <input type="text" name="hasil_dicapai" id="" >
                            <label for="" class=" labelmui">Hasil yang dicapai</label>
                        </div>
                    </div>

                    </div>
                
                    
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
     
    $(document).ready(function() {
        $('.dropify').dropify();

var userDataTable = $('#datatable').DataTable({ 

    responsive: true, 

    scrollX: true,

    // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

    // buttons: ["excel", "csv", "pdf"],

    oLanguage: {

        sSearch: 'Search:'

    },

    initComplete : function (settings, json) { },

    retrieve : true,

    processing : true,

    serverSide: true,

    serverMethod: 'POST',

    ajax : {

        dataType: 'json',

        url: '<?php echo base_url();?>troublespot/Troublespot/serverSideTable',

        data: function(data){

            $("#overlay").fadeIn(300);

            // console.log(data);

            // data.filterTgl = $('[name=event_date]').val();

            // data.filterTgl2 = $('[name=event_date_to]').val(); 

            // data.filterStatus = $('[name=status]').val();

            // data.filterName = $('[name=group_name]').val();

            // data.filterPocName = $('[name=group_poc_name]').val();

            // data.filterPhone = $('[name=poc_phone]').val();

            // data.filterThreat = $('[name=threat_level]').val();

            data.orderField = data.order[0] != undefined ? data.order[0].column : '';

            data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

            data.page = Number(data.start / data.length) + 1

        },

        beforeSend: function (xhr, settings) {
            
        },

        "dataSrc": function (result) { 

            result.iTotalRecords = result.iTotalRecords;

            result.iTotalDisplayRecords = result.iTotalRecords;

            return result.aaData;

        }

    },

    columns: [ 

        { data: 'id'},
        { data: 'polda_id'}, 
        { data: 'polres_id'},
        { data: 'location'}, 
        { data: 'created_at'},  
        { data: 'action' , orderable : false }

    ],

    order: [[ 0, "DESC" ]],

    drawCallback : function(settings){

        $("#overlay").fadeOut(300); 

    }   

});   

$(".form").submit(function(e) {
    $("#overlay").fadeIn(300);
    e.preventDefault(); 
    var formData = new FormData($('.form')[0]); 
    $.ajax({
        url: "<?php echo base_url();?>troublespot/Troublespot/store",
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
                    $(".TambahTroublespot").modal('hide');
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

var start = moment().subtract(29, 'days');
var end = moment();

function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY')); 
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

    $(document).ready(function() {
        $('#tripon').DataTable();


        var initialCenter = [-2.548926, 118.0148634];
        var initialZoom = 5;
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
var mapContainer = L.map('mapG20Dashboard', {
            maxZoom: 19,
            minZoom: 1,
            zoomControl: false,
            layers: [googleStreet]
        }).setView(initialCenter, initialZoom);

        var markerClusterGroup = L.markerClusterGroup();
        var icon = L.icon({
            iconUrl: 'http://tourbanyuwangi.com/wp-content/uploads/2018/05/map.png',
            iconSize: [80, 80], // size of the icon
        });

        var arrayData = $.grep(data, function(element, index) {
            return element.coordinate != null && element.coordinate != '';
        });
        // console.log(arrayData); 

        for (let i = 0; i < arrayData.length; i++) {
            var cordinate = arrayData[i].coordinate;
            var latlong = cordinate.split(',');
            var latitude = parseFloat(latlong[0]);
            var longitude = parseFloat(latlong[1]);
            // console.log({a:latitude , b:longitude});

            markerClusterGroup.addLayer(
                L.marker([latitude, longitude], {
                    icon
                }).bindPopup(`
                <div class="text-center" style="width: 300px;">
                    <div class="card-block">
                        <a class="avatar avatar-lg" href="javascript:void(0)">
                            <img src="${window.location.origin}/${pisah[1]}/assets_admin/assets/images/logo-colored.png" alt="Logo">
                        </a>
                        <h4 class="profile-user">${arrayData[i].group_name}</h4>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 col-12" style="margin-top: -15px;">
                            <div class="row text-left">
                                <div class="col-md-4 col-4">
                                    <h5 class="profile-job">Location :</h5>  
                                </div>
                                <div class="col-md-8 col-8">
                                    <p style="margin-top: 11px;">${arrayData[i].obvit_name}</p>
                                </div>
                            </div> 
                        </div> 
                        <div class="col-md-12 col-12" style="margin-top: -15px;">
                            <div class="row text-left">
                                <div class="col-md-4 col-4">
                                    <h5 class="profile-job">POC :</h5>  
                                </div>
                                <div class="col-md-8 col-8">
                                    <p style="margin-top: 11px;">${arrayData[i].group_poc_name}</p>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-md-12 col-12" style="margin-top: -15px;">
                            <div class="row text-left">
                                <div class="col-md-4 col-4">
                                    <h5 class="profile-job">Demand :</h5>  
                                </div>
                                <div class="col-md-8 col-8">
                                    <p style="margin-top: 11px;">${arrayData[i].demand}</p>
                                </div>
                            </div> 
                        </div>  
                    </div>
                    <div class="card-footer">
                        <div class="row no-space">
                            <div class="col-4" style="display: grid">
                                <span>Participant/s</span>
                                <span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">${arrayData[i].participant_number}</span> 
                            </div>
                            <div class="col-4" style="display: grid">
                                <span>Threat Level</span> 
                                ${arrayData[i].threat_level == 1 ? '<span class="badge badge-round badge-warning" style="margin-left: 5px;margin-right: 5px;">Low</span>' : ''}
                                ${arrayData[i].threat_level == 2 ? '<span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">Medium</span>' : ''}
                                ${arrayData[i].threat_level == 3 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 4 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 5 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 6 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 7 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 8 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 9 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 10 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 11 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                                ${arrayData[i].threat_level == 12 ? '<span class="badge badge-round badge-danger" style="margin-left: 5px;margin-right: 5px;">High</span>' : ''}
                            </div>
                            <div class="col-4" style="display: grid">
                                <span>Event Date</span> 
                                <span class="badge badge-round badge-primary" style="margin-left: 5px;margin-right: 5px;">${arrayData[i].event_date}</span> 
                            </div>
                        </div>
                    </div>
                </div>
            `)
            );
        }
        mapContainer.addLayer(markerClusterGroup);
        mapContainer.setView(initialCenter, initialZoom);

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




    });
// Conditional select Polda Polres


</script>