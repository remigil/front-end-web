<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Data Fasilitas Umum</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahKategori">Tambah Data</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Fasilitas Umum</th>
                        <th>Jumlah Fasilitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rumah Sakit</td>
                        <td>14</td>
                        <td><a href='KategoriFasum/Detail'><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahKategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" enctype="multipart/form-data">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="" placeholder="" type="text">
                        <label class="labelmui">Kategori Fasilitas Umum</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="" placeholder="" type="text">
                        <label class="labelmui">Jumlah Fasilitas</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

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



        var userDataTable = $('#datatable').DataTable({

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

            // ajax: {

            //     dataType: 'json',

            //     url: '<?php echo base_url(); ?>operasi/Akun/serverSideTable',

            //     data: function(data) {

            //         $("#overlay").fadeIn(300);

            //         // console.log(data);

            //         // data.filterTgl = $('[name=event_date]').val();

            //         // data.filterTgl2 = $('[name=event_date_to]').val(); 

            //         // data.filterStatus = $('[name=status]').val();

            //         // data.filterName = $('[name=group_name]').val();

            //         // data.filterPocName = $('[name=group_poc_name]').val();

            //         // data.filterPhone = $('[name=poc_phone]').val();

            //         // data.filterThreat = $('[name=threat_level]').val();

            //         data.orderField = data.order[0] != undefined ? data.order[0].column : '';

            //         data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

            //         data.page = Number(data.start / data.length) + 1

            //     },

            //     beforeSend: function(xhr, settings) {

            //     },

            //     "dataSrc": function(result) {

            //         result.iTotalRecords = result.iTotalRecords;

            //         result.iTotalDisplayRecords = result.iTotalRecords;

            //         return result.aaData;

            //     }

            // },

            // columns: [

            //     {
            //         data: 'id'
            //     },
            //     {
            //         data: 'namaAkun'
            //     },
            //     {
            //         data: 'vip'
            //     },
            //     {
            //         data: 'polres'
            //     },
            //     {
            //         data: 'ketuaTeam'
            //     },
            //     {
            //         data: 'noKendaraan'
            //     },


            //     {
            //         data: 'action',
            //         orderable: false
            //     }

            // ],

            // order: [
            //     [0, "DESC"]
            // ],

            // drawCallback: function(settings) {

            // $("#overlay").fadeOut(300);

            // }

        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Akun/store",
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
                            $(".TambahAkun").modal('hide');
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





    });
</script>