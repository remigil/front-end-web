<!-- Page -->
<div class="page">
  <div class="page-header">
      <h1 class="page-title">Welcome <?php echo $user[0]['first_name'] ?> <?php echo $user[0]['last_name'] ?></h1>  
      <ol class="breadcrumb"> 
          <li class="breadcrumb-item active">Today is <?php echo date("l, d F Y"); ?></li>
      </ol>
      <div class="page-header-actions">
        <span class="hidden-sm-down">
          You are logging in as <?php echo $this->session->userdata['login_note']; ?>
        </span>
      </div>
  </div>

  <div class="page-content container-fluid">
    <div class="font-size-20 mb-20" style="color: #424242;">
      Public Activities, Protests and Demonstrations on <?php echo date("l, d F Y"); ?>
    </div> 

    <div style="display: none;"> 
        <form class="form-horizontal" method="POST">
            <div class="row"> 
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Group Name :</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="group_name">
                        </div>
                    </div> 
                </div>
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Group POC :</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="group_poc_name">
                        </div>
                    </div> 
                </div>
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Phone Number :</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="poc_phone">
                        </div>
                    </div> 
                </div> 

                
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Threat Level :</label>
                        <div class="col-md-8">
                            <select class="form-control" data-plugin="select2" name="threat_level">
                                <option selected value="">Show All</option>
                                <option value='1'>Low</option>
                                <option value='2'>Medium</option>
                                <option value='3'>High</option>
                            </select> 
                        </div>
                    </div> 
                </div> 
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Event Date :</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" name="event_date"> 
                                <span class="input-group-addon">
                                    <span class="md-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div> 
                </div> 
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">To :</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" name="event_date_to" > 
                                <span class="input-group-addon">
                                    <span class="md-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 col-6">
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label">Status :</label>
                        <div class="col-md-8">
                            <select class="form-control" data-plugin="select2" name="status">
                                <option value="">Show All</option>
                                <option value='0'>Non Active</option>
                                <option selected value='1'>Active</option> 
                            </select> 
                        </div>
                    </div> 
                </div> 
            </div>
        </form>
    </div>

    <div class="row" data-plugin="matchHeight" data-by-row="true">
        
      <div class="col-xxl-12 col-lg-12">
        <!-- Widget Jvmap -->
        <button style="position: absolute;z-index: 1000;top: 10px;left: 25px;" class="btn btn-primary" data-target="#examplePositionSidebar" data-toggle="modal" type="button">
          See Data 
        </button>
        <div class="card card-shadow">
          <div class="card-block p-0">
            <div id="isi" class="h-400"></div>
          </div> 
        </div>
        <!-- End Widget Jvmap --> 
      </div> 
  </div>
</div>
<!-- End Page -->


<!-- Modal -->
<div class="modal modal-rotate-from-left" id="examplePositionSidebar" aria-hidden="true" aria-labelledby="examplePositionSidebar"
  role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple modal-sidebar modal-sm" style="width: 600px;height: auto;">
    <div class="modal-content" style="scrollbar-width: thin;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h3 class="modal-title" id="modaltitle"></h3>
      </div>
      <div class="modal-body">
        <table class="table table-hover dataTable table-striped w-full" id="dataTables-example">
          <thead>
              <tr>
                <th>No</th>
                <th>Group</th>
                <th>Location</th> 
                <th>Date / Time</th>
                <th>Demand</th>  
              </tr>
          </thead>   
        </table> 
      </div> 
    </div>
  </div>
</div>
<!-- End Modal -->


<script>
  $(document).ready(function() { 
    var lokasi = window.location.pathname;
    var pisah = lokasi.split('/');
    var slug = pisah[pisah.length - 1];  

    $("#overlay").fadeIn(300); 
    serverSideGet();

    $("#btnMap").click(function(){
        $("#overlay").fadeIn(300);  
        serverSideGet();
        userDataTable.draw();
    }); 

    function serverSideGet(){
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>event/serverSideKirka", 
            data : {
                "group_name" : $('[name=group_name]').val(),
                "group_poc_name" : $('[name=group_poc_name]').val(),
                "poc_phone" : $('[name=poc_phone]').val(),
                "threat_level" : $('[name=threat_level]').val(),
                "event_date" : $('[name=event_date]').val(),
                "event_date_to" : $('[name=event_date_to]').val(),
            }, 
            dataType : "JSON",
            success : function(result){
                let ress = result['data']['data']; 
                // console.log(result['data']);
                if (ress.length > 0) {  
                    $('#mapPublicEventDashboard').remove();
                    $('#isi').html(`<div id="mapPublicEventDashboard"></div>`);
                    get(ress); 
                }else{
                    $('#mapPublicEventDashboard').remove();
                    $('#isi').html(`<div id="mapPublicEventDashboard"></div>`);
                    get(ress); 
                    // Swal.fire(
                    // 'Public Event Not Found', 
                    // '',
                    // 'warning'
                    // ).then(function() { 
                        $("#overlay").fadeOut(300); 
                    // });  
                } 
            },
            error: function () { 
                console.log("gagal connect");
            } 
        });
    }


    function get(data){
        
        if (document.getElementById("mapPublicEventDashboard") !== null) { 
            // console.log(data); 
            
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
            var mapContainer = L.map('mapPublicEventDashboard', {
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

            $("#overlay").fadeOut(300); 
        }    
    } 








    var userDataTable = $('#dataTables-example').DataTable({ 
        responsive: true, 
        // scrollX: true,
        sDom: '<"dt-panelmenu clearfix"f>t<"dt-panelfooter clearfix"ip>', 
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
            url: '<?php echo base_url();?>event/serverSideTableKirka',
            data: function(data){
                console.log(data); 
                data.filterTgl = $('[name=event_date]').val();
                data.filterTgl2 = $('[name=event_date_to]').val();
                data.filterStatus = $('[name=status]').val();
                data.filterName = $('[name=group_name]').val();
                data.filterPocName = $('[name=group_poc_name]').val();
                data.filterPhone = $('[name=poc_phone]').val();
                data.filterThreat = $('[name=threat_level]').val();
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
            { data: 'group_name'},
            { data: 'obvit_name'}, 
            { data: 'date'},
            { data: 'coordinate'},  
        ],
        order: [[ 0, "DESC" ]],
        drawCallback : function(settings){
             
        }   
    });  
  });
</script> 