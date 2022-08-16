<div class="judulheader">
    <span><?php echo $title;?></span>
</div>
<div class="row mt-3"> 
    <div class="col-md-12">
        <div class="card" style="padding: 20px;">
            <div class="row mb-3" style="width: 95%;"> 
                <div class="col-md-4">
                    <label for="waktu">Waktu</label>
                    <div id="reportrange" class="pull-right" style="border-radius: 0.25rem; height: 40px; background: #fff; cursor: pointer; padding: 10px 10px; border: 1px solid #ccc;">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                        <span></span> <b class="caret"></b>
                    </div>
                    <input hidden type="date" id="startdate" name="startdate">
                    <input hidden type="date" id="enddate" name="enddate">
                </div>
    
                <div class="col-md-3">
                    <label for="permasalahan">Jenis Permasalahan</label>
                    <select class="form-select" name="sebaran">
                        <option selected value="">Jenis Permasalahan</option>
                        <option value="Polres">Polres</option>
                        <option value="Turjawali">Turjawali</option>
                        <option value="Operasi">Operasi</option>
                        <option value="CCTV">CCTV</option>
                        <option value="Titik Laporan">Titik Laporan</option>
                        <option value="Fasilitas Umum">Fasilitas Umum</option>
                        <option value="Public Event">Public Event</option>
                        <option value="Kecelakaan">Kecelakaan</option>
                    </select>
                </div>
    
                <div class="col-md-3"> 
                    <label for="polda">Polda</label>
                    <select class="form-select" name="polda">
                        <option selected value="">Polda Metro Jaya</option>
                        <option value="Polres">Polres</option>
                        <option value="Turjawali">Turjawali</option>
                        <option value="Operasi">Operasi</option>
                        <option value="CCTV">CCTV</option>
                        <option value="Titik Laporan">Titik Laporan</option>
                        <option value="Fasilitas Umum">Fasilitas Umum</option>
                        <option value="Public Event">Public Event</option>
                        <option value="Kecelakaan">Kecelakaan</option>
                    </select>
                </div>
            </div>
            <div id="mapG20Troublespot"></div> 
            <div>
                <div class="mt-3 mb-3" style="display: flex;text-align: center;align-content: end;float: inline-end;">
                    <button class="btn btn-primary" style="width: 200px;">Tampilkan</button>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-12 mt-5">
        <div class="card" style="padding: 20px;">
            <table id="dataTables-example" class="table table-striped table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Polres</th>
                        <th>Lokasi Kejadian</th>
                        <th>Waktu Pengkajian</th> 
                        <th>Informasi Lebih Lanjut</th> 
                    </tr>
                </thead>  
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bali</td>
                        <td>Nusa dua</td>
                        <td>5 Jam</td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url();?>troublespot/detail/1" style="width: 55%" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bali</td>
                        <td>Nusa dua</td>
                        <td>5 Jam</td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url();?>troublespot/detail/1" style="width: 55%" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bali</td>
                        <td>Nusa dua</td>
                        <td>5 Jam</td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url();?>troublespot/detail/1" style="width: 55%" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bali</td>
                        <td>Nusa dua</td>
                        <td>5 Jam</td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url();?>troublespot/detail/1" style="width: 55%" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Bali</td>
                        <td>Nusa dua</td>
                        <td>5 Jam</td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url();?>troublespot/detail/1" style="width: 55%" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Bali</td>
                        <td>Nusa dua</td>
                        <td>5 Jam</td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url();?>troublespot/detail/1" style="width: 55%" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>
</div>
  


<script>
    $(function() {

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

    $('#dataTables-example').DataTable({ 
        processing: true,
    });
     

    var initialCenter = [-8.451740, 115.089643];
    var initialZoom = 9.65;
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
    var mapContainer = L.map('mapG20Troublespot', {
        maxZoom: 20,
        minZoom: 1,
        zoomSnap: 0.25,
        zoomControl: false,
        layers: [googleStreet]
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
        position: 'bottomleft'
    }).addTo(mapContainer);
    L.control.zoom({
        position: 'bottomright'
    }).addTo(mapContainer);

    var arrayData = $.grep(data, function (element, index) {
        return element.coordinate != null && element.coordinate != '';
    });
    // console.log(arrayData); 

    for (let i = 0; i < arrayData.length; i++) { 
        var cordinate = arrayData[i].coordinate;
        var latlong =  cordinate.split(',');
        var latitude = parseFloat(latlong[0]);
        var longitude = parseFloat(latlong[1]);
        // console.log({a:latitude , b:longitude});

        markerClusterGroup.addLayer(
            L.marker([latitude,longitude], {
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




 
  });
</script> 
