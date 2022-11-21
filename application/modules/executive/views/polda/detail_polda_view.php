<div class="col-md-12">
    <div id="mapG20Dashboard" class="rounded-3" style="height:80vh;">
    </div>
</div>
<div class="filter" style=" height:125px;">
    <div class="container">

        <form action="" id="form_filter" class="">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="" id="polda_"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <label for="waktu" class="form-label  text-uppercase">Waktu</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input class="form-control" type="date" name="start_date" id="start_date">
                        </div>
                        <div class="col-md-5">
                            <input class="form-control" type="date" name="end_date" id="end_date">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" type="submit" id="btn_filter" style="width: 100%;">Tampilkan</button>
                        </div>
                    </div>

                </div>


            </div>
        </form>

    </div>
</div>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-1 d-flex">
            <div id="logo"></div>
        </div>
        <div class="col-md-7 align-self-center">
            <div id="nama"></div>
            <p>Today is <?= date('l, j F Y') ?></p>
        </div>
        <div class="col-md-3 text-end align-self-center">
            <a href="http://34.143.227.90:3001/v1/laporan_harian/export_laphar?polda_id=<?= $data['id'] ?>" class="text-center" id="btn_export"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">Export Laporan</button></a>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12 mt-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 mb-3">
                    <div id="statistik"></div>
                </div>
                <div class="col-md-3">
                    <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                    <!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                <div class="col-md-2">
                                    <i class='bx bxs-car-crash ms-n2' style="font-size: 50px; color: #464646;"></i>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Kecelakaan </span>Lalu Lintas
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="lakalantas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                <div class="col-md-2">
                                    <iconify-icon icon="ic:round-car-crash" class="ms-n2" style="font-size: 50px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Pelanggaran </span>Lalu Lintas
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="garlantas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                <div class="col-md-2">
                                    <iconify-icon icon="ic:baseline-control-camera" class="ms-n2 mt-2" style="font-size: 45px; color: #464646;"></iconify-icon>
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Turjagwali</span>
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="turjagwali"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center" style="height: 80px;">
                                <div class="col-md-2">
                                    <img src="<?= base_url() ?>assets/dashboard/icon-ranmor.svg" alt="ranmor" width="60px">
                                </div>
                                <div class="col-md-10 float-end">
                                    <span class="fs-6 float-end" style="color:#464646;">
                                        <span class="fw-bold">Kendaraan </span>Bermotor
                                    </span>
                                    <br>
                                    <span class="fs-6 fw-bold float-end" style="color:#464646;" id="motor"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end statistik -->
    </div>


    <section class="shadow-sm mt-5">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div id="namaditgakkum"></div>
                    </div>
                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                        <div class="main-chart">
                            <div id="charta">
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
                        <div id="namaditkamsel"></div>
                    </div>
                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                        <div class="main-chart">
                            <div id="chartb">
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
                        <div id="namaditregident"></div>
                    </div>
                    <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                        <div class="main-chart">
                            <div id="chartc">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        let filter = 0;
        let id = '<?= $data['id'] ?>'
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var polda_id = $('#polda_,#polda_id').val();
        // console.log(polda_id)

        // const offset = yourDate.getTimezoneOffset()
        // yourDate = new Date(yourDate.getTime() - (offset * 60 * 1000))
        // let a = firstDay.toISOString().split('T')[0]
        // let b = lastDay.toISOString().split('T')[0]
        // console.log(firstDay, lastDay)
        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/polda_executive/getDetailPolda",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(result) {
                var ressPoldaall = result.poldaall
                var ressPolda = result.polda
                $("#overlay").fadeOut(300);
                $('#motor').html(`<h1>${result.motor}</h1>`);
                $('#turjagwali').html(`<h1>${result.turjagwali}</h1>`);
                $('#garlantas').html(`<h1>${result.garlantas}</h1>`);
                $('#lakalantas').html(`<h1>${result.lakalantas}</h1>`);
                $('#logo').html(`<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" alt="img-polda" width="100px">`);
                $('#nama').html(`<h1 style="color:#007DD8 ; text-transform:uppercase;">Polda ${ressPolda.name_polda}</h1>`);
                $('#namaditgakkum').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditgakkum Polda ${ressPolda.name_polda}</h4>`);
                $('#namaditkamsel').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditkamsel Polda ${ressPolda.name_polda}</h4>`);
                $('#namaditregident').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditregident Polda ${ressPolda.name_polda}</h4>`);
                $('#statistik').html(`<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Polda ${ressPolda.name_polda}</h4>`);
                $('#polda_').html(`<label for="waktu" class="form-label  text-uppercase">Wilayah</label>
                        <select class="form-control" id="polda_id" name="polda_id">
                            <option value="${result.polda.id}">Polda ${result.polda.name_polda}</option>
                        </select>
                        `)
                $.each(ressPoldaall, (i, resp) => {
                    $('#polda_id').append(`<option value="${resp.id}">Polda ${resp.name_polda}</option>`)
                })
                $("#charta").html(`<div id="chart"></div>`);
                $("#chartb").html(`<div id="chart2"></div>`);
                $("#chartc").html(`<div id="chart3"></div>`);

                marker = L.marker([latitude, longitude], {
                    icon: L.divIcon({
                        // className: 'location-pin',
                        html: `<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" style="width: 35px; margin-top: -35px;margin-left: -14.5px;">`,
                        iconSize: [5, 5],
                        iconAnchor: [5, 10]
                    })
                }).bindPopup(
                    `<div style="width: 450px;">
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                            <img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" style="width: 50px;">
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-5 text-uppercase">Polda <b>${ressPolda.name_polda}</b></span><br>
                                            <span>${ressPolda.address}</span>
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
                                                    <span class="fs-3"> <b>${ressPolda.lakalantas}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressPolda.garlantas}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                <span class="fs-3"> <b>${ressPolda.turjagwali}</b></span>
                                                </div>    
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressPolda.sepeda_motor}</b></span>
                                                </div>
                                            </div>    
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <a href=<?= base_url('executive/Polda_executive/index/') ?>${ressPolda.id}><button class="btn btn-primary float-end">Selengkapnya</button></a>   
                                        </div>
                                        </div>
                                </div>

                            `, {
                        minWidth: 100,
                        maxWidth: 560,
                        width: 400
                    }).addTo(mapContainer);


                let zxc = ressPolda.zoomview.split(",")
                let lat = parseFloat(zxc[0])
                let long = parseFloat(zxc[1])

                var latitude = parseFloat(ressPolda.latitude);
                var longitude = parseFloat(ressPolda.longitude);


                var initialCenter = [lat, long];

                var initialZoom = 9;


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

                mapContainer.doubleClickZoom.enable();

            }
        })

        getDitgakkum(firstDay, lastDay, id, filter)
        getDitkamsel(firstDay, lastDay, id, filter)
        getDitregident(firstDay, lastDay, id, filter)

    })


    $('#btn_filter').on('click', function(e) {
        e.preventDefault();
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
        var lastDay = new Date(date.getFullYear(), 11, 31).toLocaleDateString("en-GB").split('/').reverse().join('-');

        let filter = 1;
        let polda_id = $('#polda_id').val()
        let start_date = $('#start_date').val()
        let end_date = $('#end_date').val()
        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/polda_executive/getDetailPolda_filter",
            data: {
                id: polda_id,
                start_date: start_date,
                end_date: end_date
            },
            dataType: "JSON",
            success: function(result) {
                var ressPolda = result.polda
                $("#overlay").fadeOut(300);
                $('#motor').html(`<h1>${result.motor}</h1>`);
                $('#turjagwali').html(`<h1>${result.turjagwali}</h1>`);
                $('#garlantas').html(`<h1>${result.garlantas}</h1>`);
                $('#lakalantas').html(`<h1>${result.lakalantas}</h1>`);
                $('#logo').html(`<img src="<?= url_api() . 'polda/logo/' ?>${ressPolda.logo_polda}" alt="img-polda" width="100px">`);
                $('#btn_export').attr('href', `http://34.143.227.90:3001/v1/laporan_harian/export_laphar?polda_id=${polda_id}`)
                $('#nama').html(`<h1 style="color:#007DD8 ; text-transform:uppercase;">Polda ${ressPolda.name_polda}</h1>`);
                $('#namaditgakkum').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditgakkum Polda ${ressPolda.name_polda}</h4>`);
                $('#namaditkamsel').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditkamsel Polda ${ressPolda.name_polda}</h4>`);
                $('#namaditregident').html(`<h4 class="card-title mb-0 text-uppercase">Data Ditregident Polda ${ressPolda.name_polda}</h4>`);
                $('#statistik').html(`<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Polda ${ressPolda.name_polda}</h4>`);


            }
        })
        $("#charta").html(`<div id="chart"></div>`);
        $("#chartb").html(`<div id="chart2"></div>`);
        $("#chartc").html(`<div id="chart3"></div>`);

        getDitgakkum(start_date, end_date, polda_id, filter)
        getDitkamsel(start_date, end_date, polda_id, filter)
        getDitregident(start_date, end_date, polda_id, filter)
    })


    function getDitgakkum(firstDay, lastDay, id, filter) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitgakkum",
            data: {
                id: id,
                start_date: firstDay,
                end_date: lastDay,
                filter: filter
            },
            dataType: "JSON",
            success: function(result) {
                // console.log(result)
                var polda_month = result.data.polda_month;
                var garlantas = result.data.garlantas;
                var lakalantas = result.data.lakalantas;
                var turjagwali = result.data.turjagwali;
                var lakalanggar = result.data.lakalanggar;
                var ditgakkum = {
                    series: [{
                        name: 'Garlantas',
                        type: 'line',
                        data: garlantas,
                        color: "#11347A"
                    }, {
                        name: 'Lakalantas',
                        type: 'line',
                        data: lakalantas,
                        color: "#CB2D3E"
                    }, {
                        name: 'Turjagwali',
                        type: 'line',
                        data: turjagwali,
                        color: "#E8D42F"
                    }, {
                        name: 'Lakalanggar',
                        type: 'line',
                        data: lakalanggar,
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
                                garlantassebelumnya = garlantas[0];
                                lakalantassebelumnya = lakalantas[0];
                                turjagwalisebelumnya = turjagwali[0];
                                lakalanggarsebelumnya = lakalanggar[0];
                                if (garlantas[0] < garlantas[1]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[0] > garlantas[1]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[0] < lakalantas[1]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[0] > lakalantas[1]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[0] < turjagwali[1]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[0] > turjagwali[1]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[0] < lakalanggar[1]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[0] > lakalanggar[1]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                garlantassebelumnya = garlantas[1];
                                lakalantassebelumnya = lakalantas[1];
                                turjagwalisebelumnya = turjagwali[1];
                                lakalanggarsebelumnya = lakalanggar[1];
                                if (garlantas[1] < garlantas[2]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[1] > garlantas[2]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[1] < lakalantas[2]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[1] > lakalantas[2]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[1] < turjagwali[2]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[1] > turjagwali[2]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[1] < lakalanggar[2]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[1] > lakalanggar[2]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                garlantassebelumnya = garlantas[2];
                                lakalantassebelumnya = lakalantas[2];
                                turjagwalisebelumnya = turjagwali[2];
                                lakalanggarsebelumnya = lakalanggar[2];
                                if (garlantas[2] < garlantas[3]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[2] > garlantas[3]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[2] < lakalantas[3]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[2] > lakalantas[3]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[2] < turjagwali[3]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[2] > turjagwali[3]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[2] < lakalanggar[3]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[2] > lakalanggar[3]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                garlantassebelumnya = garlantas[3];
                                lakalantassebelumnya = lakalantas[3];
                                turjagwalisebelumnya = turjagwali[3];
                                lakalanggarsebelumnya = lakalanggar[3];
                                if (garlantas[3] < garlantas[4]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[3] > garlantas[4]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[3] < lakalantas[4]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[3] > lakalantas[4]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[3] < turjagwali[4]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[3] > turjagwali[4]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[3] < lakalanggar[4]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[3] > lakalanggar[4]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                garlantassebelumnya = garlantas[4];
                                lakalantassebelumnya = lakalantas[4];
                                turjagwalisebelumnya = turjagwali[4];
                                lakalanggarsebelumnya = lakalanggar[4];
                                if (garlantas[4] < garlantas[5]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[4] > garlantas[5]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[4] < lakalantas[5]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[4] > lakalantas[5]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[4] < turjagwali[5]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[4] > turjagwali[5]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[4] < lakalanggar[5]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[4] > lakalanggar[5]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                garlantassebelumnya = garlantas[5];
                                lakalantassebelumnya = lakalantas[5];
                                turjagwalisebelumnya = turjagwali[5];
                                lakalanggarsebelumnya = lakalanggar[5];
                                if (garlantas[5] < garlantas[6]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[5] > garlantas[6]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[5] < lakalantas[6]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[5] > lakalantas[6]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[5] < turjagwali[6]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[5] > turjagwali[6]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[5] < lakalanggar[6]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[5] > lakalanggar[6]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                garlantassebelumnya = garlantas[6];
                                lakalantassebelumnya = lakalantas[6];
                                turjagwalisebelumnya = turjagwali[6];
                                lakalanggarsebelumnya = lakalanggar[6];
                                if (garlantas[6] < garlantas[7]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[6] > garlantas[7]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[6] < lakalantas[7]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[6] > lakalantas[7]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[6] < turjagwali[7]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[6] > turjagwali[7]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[6] < lakalanggar[7]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[6] > lakalanggar[7]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                garlantassebelumnya = garlantas[7];
                                lakalantassebelumnya = lakalantas[7];
                                turjagwalisebelumnya = turjagwali[7];
                                lakalanggarsebelumnya = lakalanggar[7];
                                if (garlantas[7] < garlantas[8]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[7] > garlantas[8]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[7] < lakalantas[8]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[7] > lakalantas[8]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[7] < turjagwali[8]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[7] > turjagwali[8]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[7] < lakalanggar[8]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[7] > lakalanggar[8]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                garlantassebelumnya = garlantas[8];
                                lakalantassebelumnya = lakalantas[8];
                                turjagwalisebelumnya = turjagwali[8];
                                lakalanggarsebelumnya = lakalanggar[8];
                                if (garlantas[8] < garlantas[9]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[8] > garlantas[9]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[8] < lakalantas[9]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[8] > lakalantas[9]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[8] < turjagwali[9]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[8] > turjagwali[9]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[8] < lakalanggar[9]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[8] > lakalanggar[9]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                garlantassebelumnya = garlantas[9];
                                lakalantassebelumnya = lakalantas[9];
                                turjagwalisebelumnya = turjagwali[9];
                                lakalanggarsebelumnya = lakalanggar[9];
                                if (garlantas[9] < garlantas[10]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[9] > garlantas[10]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = `Seimbang`
                                }
                                if (lakalantas[9] < lakalantas[10]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[9] > lakalantas[10]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = `Seimbang`
                                }
                                if (turjagwali[9] < turjagwali[10]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[9] > turjagwali[10]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = `Seimbang`
                                }
                                if (lakalanggar[9] < lakalanggar[10]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[9] > lakalanggar[10]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = `Seimbang`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                garlantassebelumnya = garlantas[10];
                                lakalantassebelumnya = lakalantas[10];
                                turjagwalisebelumnya = turjagwali[10];
                                lakalanggarsebelumnya = lakalanggar[10];
                                if (garlantas[10] < garlantas[11]) {
                                    persentasegarlantas = 'Naik'
                                } else if (garlantas[10] > garlantas[11]) {
                                    persentasegarlantas = 'Turun'
                                } else {
                                    persentasegarlantas = 'Seimbang'
                                }
                                if (lakalantas[10] < lakalantas[11]) {
                                    persentaselakalantas = 'Naik'
                                } else if (lakalantas[10] > lakalantas[11]) {
                                    persentaselakalantas = 'Turun'
                                } else {
                                    persentaselakalantas = 'Seimbang'
                                }
                                if (turjagwali[10] < turjagwali[11]) {
                                    persentaseturjagwali = 'Naik'
                                } else if (turjagwali[10] > turjagwali[11]) {
                                    persentaseturjagwali = 'Turun'
                                } else {
                                    persentaseturjagwali = 'Seimbang'
                                }
                                if (lakalanggar[10] < lakalanggar[11]) {
                                    persentaselakalanggar = 'Naik'
                                } else if (lakalanggar[10] > lakalanggar[11]) {
                                    persentaselakalanggar = 'Turun'
                                } else {
                                    persentaselakalanggar = 'Seimbang'
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
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${garlantassebelumnya}</span><br>
                                                            <span class="fw-bold">${lakalantassebelumnya}</span><br>
                                                            <span class="fw-bold">${turjagwalisebelumnya}</span><br>
                                                            <span class="fw-bold">${lakalanggarsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalanggar[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasegarlantas}</span><br>
                                                    <span class="fw-bold">${persentaselakalantas}</span><br>
                                                    <span class="fw-bold">${persentaseturjagwali}</span><br>
                                                    <span class="fw-bold">${persentaselakalanggar}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Garlantas</span><br>
                                                            <span class="fw-bold">Total Lakalantas</span><br>
                                                            <span class="fw-bold">Total Turjagwali</span><br>
                                                            <span class="fw-bold">Total Lakalanggar</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${garlantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${turjagwali[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${lakalanggar[dataPointIndex]}</span><br>
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
                var ditgakkum = new ApexCharts(document.querySelector("#chart"), ditgakkum);
                ditgakkum.render();
            }
        })
    }

    function getDitkamsel(firstDay, lastDay, id, filter) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitkamsel",
            data: {
                id: id,
                start_date: firstDay,
                end_date: lastDay,
                filter: filter
            },
            dataType: "JSON",
            success: function(result) {
                // console.log(result)
                let polda_month = result.data.polda_month
                let dikmaslantas = result.data.dikmaslantas
                let penyebaran = result.data.penyebaran
                var ditkamsel = {
                    series: [{
                        name: 'Dikmaslantas',
                        type: 'line',
                        data: dikmaslantas,
                        color: "#11347A"
                    }, {
                        name: 'Penyebaran/Pemasangan',
                        type: 'line',
                        data: penyebaran,
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
                                dikmaslantassebelumnya = dikmaslantas[0];
                                penyebaransebelumnya = penyebaran[0];
                                if (dikmaslantas[0] < dikmaslantas[1]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[0] > dikmaslantas[1]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[0] < penyebaran[1]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[0] > penyebaran[1]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                dikmaslantassebelumnya = dikmaslantas[1];
                                penyebaransebelumnya = penyebaran[1];

                                if (dikmaslantas[1] < dikmaslantas[2]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[1] > dikmaslantas[2]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[1] < penyebaran[2]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[1] > penyebaran[2]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                dikmaslantassebelumnya = dikmaslantas[2];
                                penyebaransebelumnya = penyebaran[2];

                                if (dikmaslantas[2] < dikmaslantas[3]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[2] > dikmaslantas[3]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[2] < penyebaran[3]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[2] > penyebaran[3]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                dikmaslantassebelumnya = dikmaslantas[3];
                                penyebaransebelumnya = penyebaran[3];

                                if (dikmaslantas[3] < dikmaslantas[4]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[3] > dikmaslantas[4]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[3] < penyebaran[4]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[3] > penyebaran[4]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                dikmaslantassebelumnya = dikmaslantas[4];
                                penyebaransebelumnya = penyebaran[4];

                                if (dikmaslantas[4] < dikmaslantas[5]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[4] > dikmaslantas[5]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[4] < penyebaran[5]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[4] > penyebaran[5]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                dikmaslantassebelumnya = dikmaslantas[5];
                                penyebaransebelumnya = penyebaran[5];

                                if (dikmaslantas[5] < dikmaslantas[6]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[5] > dikmaslantas[6]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[5] < penyebaran[6]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[5] > penyebaran[6]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                dikmaslantassebelumnya = dikmaslantas[6];
                                penyebaransebelumnya = penyebaran[6];

                                if (dikmaslantas[6] < dikmaslantas[7]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[6] > dikmaslantas[7]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[6] < penyebaran[7]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[6] > penyebaran[7]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                dikmaslantassebelumnya = dikmaslantas[7];
                                penyebaransebelumnya = penyebaran[7];

                                if (dikmaslantas[7] < dikmaslantas[8]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[7] > dikmaslantas[8]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[7] < penyebaran[8]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[7] > penyebaran[8]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                dikmaslantassebelumnya = dikmaslantas[8];
                                penyebaransebelumnya = penyebaran[8];

                                if (dikmaslantas[8] < dikmaslantas[9]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[8] > dikmaslantas[9]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[8] < penyebaran[9]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[8] > penyebaran[9]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                dikmaslantassebelumnya = dikmaslantas[9];
                                penyebaransebelumnya = penyebaran[9];

                                if (dikmaslantas[9] < dikmaslantas[10]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[9] > dikmaslantas[10]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = `Seimbang`
                                }
                                if (penyebaran[9] < penyebaran[10]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[9] > penyebaran[10]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = `Seimbang`
                                }


                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                dikmaslantassebelumnya = dikmaslantas[10];
                                penyebaransebelumnya = penyebaran[10];

                                if (dikmaslantas[10] < dikmaslantas[11]) {
                                    persentasedikmaslantas = 'Naik'
                                } else if (dikmaslantas[10] > dikmaslantas[11]) {
                                    persentasedikmaslantas = 'Turun'
                                } else {
                                    persentasedikmaslantas = 'Seimbang'
                                }
                                if (penyebaran[10] < penyebaran[11]) {
                                    persentasepenyebaran = 'Naik'
                                } else if (penyebaran[10] > penyebaran[11]) {
                                    persentasepenyebaran = 'Turun'
                                } else {
                                    persentasepenyebaran = 'Seimbang'
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
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${dikmaslantassebelumnya}</span><br>
                                                            <span class="fw-bold">${penyebaransebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${penyebaran[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasedikmaslantas}</span><br>
                                                    <span class="fw-bold">${persentasepenyebaran}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Dikmaslantas</span><br>
                                                            <span class="fw-bold">Total Penyebaran</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${dikmaslantas[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${penyebaran[dataPointIndex]}</span><br>
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

                var ditkamsel = new ApexCharts(document.querySelector("#chart2"), ditkamsel);
                ditkamsel.render();
            }
        })
    }

    function getDitregident(firstDay, lastDay, id, filter) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>executive/polda_executive/getChartDitregident",
            data: {
                id: id,
                start_date: firstDay,
                end_date: lastDay,
                filter: filter
            },
            dataType: "JSON",
            success: function(result) {
                let polda_month = result.data.polda_month
                let bpkb = result.data.bpkb
                let stnk = result.data.stnk
                let sim = result.data.sim
                let ranmor = result.data.ranmor
                var ditregident = {
                    series: [{
                        name: 'BPKB',
                        type: 'line',
                        data: bpkb,
                        color: "#11347A"
                    }, {
                        name: 'STNK',
                        type: 'line',
                        data: stnk,
                        color: "#CB2D3E"
                    }, {
                        name: 'SIM',
                        type: 'line',
                        data: sim,
                        color: "#E8D42F"
                    }, {
                        name: 'RANMOR',
                        type: 'line',
                        data: ranmor,
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
                                bpkbsebelumnya = bpkb[0];
                                stnksebelumnya = stnk[0];
                                simsebelumnya = sim[0];
                                ranmorsebelumnya = ranmor[0];
                                if (bpkb[0] < bpkb[1]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[0] > bpkb[1]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[0] < stnk[1]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[0] > stnk[1]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[0] < sim[1]) {
                                    persentasesim = 'Naik'
                                } else if (sim[0] > sim[1]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[0] < ranmor[1]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[0] > ranmor[1]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }
                            } else if (w.globals.labels[dataPointIndex] == 3) {
                                bulansebelumnya = polda_month[1]
                                bpkbsebelumnya = bpkb[1];
                                stnksebelumnya = stnk[1];
                                simsebelumnya = sim[1];
                                ranmorsebelumnya = ranmor[1];
                                if (bpkb[1] < bpkb[2]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[1] > bpkb[2]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[1] < stnk[2]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[1] > stnk[2]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[1] < sim[2]) {
                                    persentasesim = 'Naik'
                                } else if (sim[1] > sim[2]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[1] < ranmor[2]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[1] > ranmor[2]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }


                            } else if (w.globals.labels[dataPointIndex] == 4) {
                                bulansebelumnya = polda_month[2]
                                bpkbsebelumnya = bpkb[2];
                                stnksebelumnya = stnk[2];
                                simsebelumnya = sim[2];
                                ranmorsebelumnya = ranmor[2];
                                if (bpkb[2] < bpkb[3]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[2] > bpkb[3]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[2] < stnk[3]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[2] > stnk[3]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[2] < sim[3]) {
                                    persentasesim = 'Naik'
                                } else if (sim[2] > sim[3]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[2] < ranmor[3]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[2] > ranmor[3]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 5) {
                                bulansebelumnya = polda_month[3]
                                bpkbsebelumnya = bpkb[3];
                                stnksebelumnya = stnk[3];
                                simsebelumnya = sim[3];
                                ranmorsebelumnya = ranmor[3];
                                if (bpkb[3] < bpkb[4]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[3] > bpkb[4]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[3] < stnk[4]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[3] > stnk[4]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[3] < sim[4]) {
                                    persentasesim = 'Naik'
                                } else if (sim[3] > sim[4]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[3] < ranmor[4]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[3] > ranmor[4]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 6) {
                                bulansebelumnya = polda_month[4]
                                bpkbsebelumnya = bpkb[4];
                                stnksebelumnya = stnk[4];
                                simsebelumnya = sim[4];
                                ranmorsebelumnya = ranmor[4];
                                if (bpkb[4] < bpkb[5]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[4] > bpkb[5]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[4] < stnk[5]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[4] > stnk[5]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[4] < sim[5]) {
                                    persentasesim = 'Naik'
                                } else if (sim[4] > sim[5]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[4] < ranmor[5]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[4] > ranmor[5]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 7) {
                                bulansebelumnya = polda_month[5]
                                bpkbsebelumnya = bpkb[5];
                                stnksebelumnya = stnk[5];
                                simsebelumnya = sim[5];
                                ranmorsebelumnya = ranmor[5];
                                if (bpkb[5] < bpkb[6]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[5] > bpkb[6]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[5] < stnk[6]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[5] > stnk[6]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[5] < sim[6]) {
                                    persentasesim = 'Naik'
                                } else if (sim[5] > sim[6]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[5] < ranmor[6]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[5] > ranmor[6]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 8) {
                                bulansebelumnya = polda_month[6]
                                bpkbsebelumnya = bpkb[6];
                                stnksebelumnya = stnk[6];
                                simsebelumnya = sim[6];
                                ranmorsebelumnya = ranmor[6];
                                if (bpkb[6] < bpkb[7]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[6] > bpkb[7]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[6] < stnk[7]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[6] > stnk[7]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[6] < sim[7]) {
                                    persentasesim = 'Naik'
                                } else if (sim[6] > sim[7]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[6] < ranmor[7]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[6] > ranmor[7]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 9) {
                                bulansebelumnya = polda_month[7]
                                bpkbsebelumnya = bpkb[7];
                                stnksebelumnya = stnk[7];
                                simsebelumnya = sim[7];
                                ranmorsebelumnya = ranmor[7];
                                if (bpkb[7] < bpkb[8]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[7] > bpkb[8]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[7] < stnk[8]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[7] > stnk[8]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[7] < sim[8]) {
                                    persentasesim = 'Naik'
                                } else if (sim[7] > sim[8]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[7] < ranmor[8]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[7] > ranmor[8]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 10) {
                                bulansebelumnya = polda_month[8]
                                bpkbsebelumnya = bpkb[8];
                                stnksebelumnya = stnk[8];
                                simsebelumnya = sim[8];
                                ranmorsebelumnya = ranmor[8];
                                if (bpkb[8] < bpkb[9]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[8] > bpkb[9]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[8] < stnk[9]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[8] > stnk[9]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[8] < sim[9]) {
                                    persentasesim = 'Naik'
                                } else if (sim[8] > sim[9]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[8] < ranmor[9]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[8] > ranmor[9]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
                                }

                            } else if (w.globals.labels[dataPointIndex] == 11) {
                                bulansebelumnya = polda_month[9]
                                bpkbsebelumnya = bpkb[9];
                                stnksebelumnya = stnk[9];
                                simsebelumnya = sim[9];
                                ranmorsebelumnya = ranmor[9];
                                if (bpkb[9] < bpkb[10]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[9] > bpkb[10]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = `Seimbang`
                                }
                                if (stnk[9] < stnk[10]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[9] > stnk[10]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = `Seimbang`
                                }
                                if (sim[9] < sim[10]) {
                                    persentasesim = 'Naik'
                                } else if (sim[9] > sim[10]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = `Seimbang`
                                }
                                if (ranmor[9] < ranmor[10]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[9] > ranmor[10]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = `Seimbang`
                                }

                            } else if (w.globals.labels[dataPointIndex] == 12) {
                                bulansebelumnya = polda_month[10]
                                bpkbsebelumnya = bpkb[10];
                                stnksebelumnya = stnk[10];
                                simsebelumnya = sim[10];
                                ranmorsebelumnya = ranmor[10];
                                if (bpkb[10] < bpkb[11]) {
                                    persentasebpkb = 'Naik'
                                } else if (bpkb[10] > bpkb[11]) {
                                    persentasebpkb = 'Turun'
                                } else {
                                    persentasebpkb = 'Seimbang'
                                }
                                if (stnk[10] < stnk[11]) {
                                    persentasestnk = 'Naik'
                                } else if (stnk[10] > stnk[11]) {
                                    persentasestnk = 'Turun'
                                } else {
                                    persentasestnk = 'Seimbang'
                                }
                                if (sim[10] < sim[11]) {
                                    persentasesim = 'Naik'
                                } else if (sim[10] > sim[11]) {
                                    persentasesim = 'Turun'
                                } else {
                                    persentasesim = 'Seimbang'
                                }
                                if (ranmor[10] < ranmor[11]) {
                                    persentaseranmor = 'Naik'
                                } else if (ranmor[10] > ranmor[11]) {
                                    persentaseranmor = 'Turun'
                                } else {
                                    persentaseranmor = 'Seimbang'
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
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="fw-bold">${bpkbsebelumnya}</span><br>
                                                            <span class="fw-bold">${stnksebelumnya}</span><br>
                                                            <span class="fw-bold">${simsebelumnya}</span><br>
                                                            <span class="fw-bold">${ranmorsebelumnya}</span><br>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${ranmor[dataPointIndex]}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                <div class="my-2 text-center">
                                                    <span class="fs-6 fw-bold">Presentase</span>
                                                </div>
                                                    <span class="fw-bold">${persentasebpkb}</span><br>
                                                    <span class="fw-bold">${persentasestnk}</span><br>
                                                    <span class="fw-bold">${persentasesim}</span><br>
                                                    <span class="fw-bold">${persentaseranmor}</span><br>
                                                </div>
                                                ` : `
                                                <div class="col-md-12">
                                                <div class="my-2 text-center">    
                                                    <span class="fs-6 fw-bold">${polda_month[dataPointIndex]}</span>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-7 ms-2">
                                                            <span class="fw-bold">Total Bpkb</span><br>
                                                            <span class="fw-bold">Total Stnk</span><br>
                                                            <span class="fw-bold">Total Sim</span><br>
                                                            <span class="fw-bold">Total Ranmor</span><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="fw-bold">${bpkb[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${stnk[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${sim[dataPointIndex]}</span><br>
                                                            <span class="fw-bold">${ranmor[dataPointIndex]}</span><br>
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

                var ditregident = new ApexCharts(document.querySelector("#chart3"), ditregident);
                ditregident.render();
            }
        })
    }
</script>