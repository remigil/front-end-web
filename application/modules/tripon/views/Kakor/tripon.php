<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card" style="display:none ;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 ">
                    <label for="waktu" class="form-label"> Waktu</label>
                    <input class="form-control" type="date" name="waktu" id="waktu">
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Kendaraan</label>
                    <select name="type_vehicle" class="form-select" style="width:100%" id="type_name" required>
                        <option selected value="">Pilih Jenis Kendaraan</option>
                        <?php
                        foreach ($data['getVehicle'] as $row) : ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['type_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3 ">
                    <label class="form-label">Titik</label>
                    <select class="form-select">
                        <option>Titik Kemacetan</option>
                        <option>Large Kemacetan</option>
                        <option>Small Kemacetan</option>
                    </select>
                </div>
            </div>
            <div style="height: 450px;" class="mt-3" id="mapG20Dashboard"></div>
            <button class=" mt-3 btn btn-primary float-end"> Tampilkan </button>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>DATA PERJALANAN</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Jenis Kendaraan</p>
                </div>
                <div class="card-body">
                    <div class="main-chart" style="overflow:hidden; overflow-x:scroll">
                        <div id="chart4" style="width: 100vw"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="height: 70vh;">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0">
                    <h5>DATA TRIPON</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Jenis Kendaraan</p>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="display: none;">
        <div class="card-header bg-primary ">
            <h5 class="modal-title text-white">Filter</h5>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="" placeholder="" type="text">
                            <label class="labelmui">Kota Awal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="" placeholder="" type="text">
                            <label class="labelmui">Kota Tujuan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-btnfield">
                            <button type="button" class="btn btn-primary" style="width:100%;" onclick="BtnFilter()">Terapkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-sm-12" id="FilterTripOn"></div>


    <div class="card">
        <div class="card-body">
            <table id="dataTable" class="table table-striped dt-responsive  nowrap w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Pengemudi</th>
                        <th>No Polisi Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merk Kendaraan</th>
                        <!-- <th>Penumpang</th> -->
                        <th>Informasi Lebih Lanjut</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        userDataTable = $('#dataTable').DataTable({

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

                url: '<?php echo base_url(); ?>tripon/Tripon/serverSideTable',

                data: function(data) {

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
                    data: 'person_name',
                },
                {
                    data: 'no_vehicle'
                },
                {
                    data: 'type_vehicle'
                },
                {
                    data: 'brand_vehicle'
                },

                // {
                //     data: 'passenger'
                // },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "ASC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });


        getPieTripOn();

    });
    $(document).ready(function() {


        var keberangkatan = {
            series: [{
                name: 'Keberangkatan',
                type: 'column',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
                color: "#003A91",
            }, {
                name: 'Kedatangan',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
                type: "column",
                color: "#CB2D3E",
            }],
            chart: {
                type: 'line',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'circle',
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
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['DKI JAKARTA', 'JATENG', 'JATIM', 'JABAR', 'DIY', 'BANTEN', 'SUMBAR', 'JAMBI', 'RIAU'],
            },

            fill: {
                opacity: 1
            },

        };

        var keberangkatan2 = new ApexCharts(document.querySelector("#chart4"), keberangkatan);
        keberangkatan2.render();

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


    function getPieTripOn() {
        $.ajax({
            url: "<?= base_url() ?>tripon/getTripOn",
            type: 'POST',
            dataType: "JSON",
            success: function(results) {
                console.log(results);
                var options_tripon_kendaraan = {
                    series: results.jumlah,
                    chart: {
                        width: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var tripon_kendaraan = new ApexCharts(document.querySelector("#chart3"), options_tripon_kendaraan);
                tripon_kendaraan.render();
            }
        })
    }

    function BtnFilter() {
        $('#FilterTripOn').html(`<div class="card">
        <div class="card-body">
            <table class="table table-bordered text-center fw-bold">
                <thead class="table-primary">
                    <tr>
                        <th>Kota Awal</th>
                        <th>Kota Tujuan</th>
                        <th>Jumlah TripOn Terdaftar</th>
                        <th>Jumlah Penumpang Terdaftar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bogor</td>
                        <td>Bandung</td>
                        <td>1230</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>Bandung</td>
                        <td>Bogor</td>
                        <td>123</td>
                        <td>1230</td>
                    </tr>
                    <tr>
                        <td colspan="2">Total</td>
                        <td>1353</td>
                        <td>1353</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        `)
    }
</script>