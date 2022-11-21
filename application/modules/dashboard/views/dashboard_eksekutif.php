<div class="container-fluid">
    <div class="row">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

        <div class="col-md-12  align-self-center">
            <div id="mapG20Dashboard" class="rounded-3" style="height:80vh;">
            </div>
            <hr class="mt-4 mb-4" style="border: 2px; color:#007DD8; opacity:100%; ">
            <div class="container">
                <div class="row d-flex justify-content-between mb-3">

                    <!-- <div class="d-flex justify-content-between"> -->
                    <div class="col-md-2">
                        <a href="<?= base_url('executive/Satker_executive/ditgakkum'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditgakkum</button></a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('executive/Satker_executive/ditregident'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditregident</button></a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('executive/Satker_executive/ditkamsel'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">Ditkamsel</button></a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('executive/Satker_executive/bagrenmin'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">BagRenMin</button></a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('executive/Satker_executive/bagops'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">BagOps</button></a>
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('executive/Satker_executive/bagtik'); ?>"><button class="btn btn-outline-primary text-uppercase fw-bold" style="width: 100%; border-color:#007DD8;">BagTik</button></a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-5">
                    <div class="col-md-6 align-items-center">
                        <a href="<?= base_url() ?>executive/Opsus_executive/index"><button class="btn btn-md text-uppercase fw-bold" style="width: 100%; background: #E4E4E4;">Data Harian Operasi Khusus</button></a>
                    </div>
                    <div class="col-md-6 align-items-center">
                        <a href="<?= base_url() ?>executive/Anev_executive/index"><button class="btn btn-md text-uppercase fw-bold" style="width: 100%;  background: #E4E4E4;">Anev</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background:#E9E9E9">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container-fluid">

                <div class="row d-flex align-items-center">
                    <div class="col-md-12 mb-1 mt-3 text-center">
                        <span style="color:#007DD8;" class="text-uppercase fw-bold fs-5">Data Rekapitulasi Nasional</span>
                    </div>
                    <!-- <div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
							<button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Harian</button>
						</div>
						<div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
							<button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Bulanan</button>
						</div>
						<div class="col-md-2 mb-1 mt-3 d-flex justify-content-around">
							<button class="btn btn-md btn-outline-primary" style="border-radius:10px; border-color:#007DD8; width:75%;">Tahunan</button>
						</div> -->
                </div>
                <div class="row d-flex">
                    <div class="col-md-7 mt-3">
                        <h5>10 Polda Pelanggaran Lantas Tertinggi</h5>
                        <div class="mb-3">
                            <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                <table class="table table-bordered table-hover rounded">
                                    <thead class="" style="background-color:#007DD8; color:#fff;">
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Polda</th>
                                            <th scope="col">Total Pelanggaran</th>
                                            <th scope="col">Pelanggaran Berat</th>
                                            <th scope="col">Pelanggaran Sedang</th>
                                            <th scope="col">Pelanggaran Ringan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-pelanggaran">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <h5>10 Polda Kecelakaan Tertinggi</h5>
                        <div class="mb-3">
                            <div class="card shadow-sm" style="border-radius: 30px; overflow: hidden;">
                                <table class="table table-bordered table-hover rounded">
                                    <thead class="" style="background-color:#007DD8; color:#fff;">
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Polda</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Meninggal Dunia</th>
                                            <th scope="col">Luka Berat</th>
                                            <th scope="col">Luka Ringan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-kecelakaan">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row d-flex">
                    <div class="col-md-12 mt-3">
                        <div class="mb-3">
                            <section class="shadow-sm">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>10 Polda Turjagwali Tertinggi</h5>
                                            </div>
                                            <div class="card-body" style="overflow:hidden; overflow-x:scroll">
                                                <div class="main-chart">
                                                    <div id="chartturjagwali" style="width: 100vw"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let app_url = '<%-app_url%>'
    let path = '<%-path%>'
    var marker = new Array();

    $(document).ready(function() {
        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/getPolda",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                let ressData = result;
                // console.log();


                for (let i = 0; i < ressData.length; i++) {
                    id = i;
                    var latitude = parseFloat(ressData[i].latitude);
                    var longitude = parseFloat(ressData[i].longitude);

                    var resource = '';

                    marker[i] = L.marker([latitude, longitude], {
                        icon: L.divIcon({
                            // className: 'location-pin',
                            html: `<img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 35px; margin-top: -35px;margin-left: -14.5px;">`,
                            iconSize: [5, 5],
                            iconAnchor: [5, 10]
                        })
                    }).bindPopup(
                        `<div style="width: 450px;">
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                            <img src="<?= url_api() . 'polda/logo/' ?>${ressData[i].logo_polda}" style="width: 50px;">
                                        </div>
                                        <div class="col-md-10">
                                            <span class="fs-5 text-uppercase">Polda <b>${ressData[i].name_polda}</b></span><br>
                                            <span>${ressData[i].address}</span>
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
                                                    <span class="fs-3"> <b>${ressData[i].lakalantas}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].garlantas}</b></span>
                                                </div>
                                                <div class="col-md-3">
                                                <span class="fs-3"> <b>${ressData[i].turjagwali}</b></span>
                                                </div>    
                                                <div class="col-md-3">
                                                    <span class="fs-3"> <b>${ressData[i].sepeda_motor}</b></span>
                                                </div>
                                            </div>    
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <a href=<?= base_url('executive/Polda_executive/index/') ?>${ressData[i].id}><button class="btn btn-primary float-end">Selengkapnya</button></a>   
                                        </div>
                                        </div>
                                </div>
                                    
                            `, {
                            minWidth: 100,
                            maxWidth: 560,
                            width: 400
                        }).addTo(mapContainer);
                }

            }
        });



        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/getGarlantas",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';

                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${result[i].name_polda}  </td> 
                            <td>  ${result[i].total}  </td> 
                            <td>  ${result[i].pelanggaran_berat}  </td> 
                            <td>  ${result[i].pelanggaran_sedang}  </td> 
                            <td>  ${result[i].pelanggaran_ringan}  </td> 
                            </tr>`
                }
                $('#tbody-pelanggaran').html(table);
            }
        })

        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/getLakalantas",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                var table = '';

                for (let i = 0; i < result.length; i++) {
                    let x = parseInt(i)
                    let no = x + 1
                    table += `<tr class="text-center"> 
                            <td>  ${no}  </td> 
                            <td>  ${result[i].name_polda}  </td> 
                            <td>  ${result[i].insiden_kecelakaan}  </td> 
                            <td>  ${result[i].meninggal_dunia}  </td> 
                            <td>  ${result[i].luka_berat}  </td> 
                            <td>  ${result[i].luka_ringan}  </td> 
                            </tr>`
                }
                $('#tbody-kecelakaan').html(table);
            }
        })

        $("#overlay").fadeIn(300);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/getStatistik",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);

                $('#lakalantas').html(`<span class="fs-4" >${result.lakalantas}</span >`);
                $('#garlantas').html(`<span class="fs-4" >${result.garlantas}</span >`);
                $('#motor').html(`<span class="fs-4" >${result.motor}</span>`);
                $('#turjagwali').html(`<span class="fs-4" >${result.turjagwali}</span >`);
            }
        })


        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/getTurjagwali",
            dataType: "JSON",
            success: function(result) {
                $("#overlay").fadeOut(300);
                console.log(result)
                var turjagwali = {
                    series: [{
                        name: 'Pengaturan',
                        type: 'column',
                        data: result.polda_pengaturan,
                        color: "#11347A"
                    }, {
                        name: 'Pengawalan',
                        type: 'column',
                        data: result.polda_pengawalan,
                        color: "#CB2D3E"
                    }, {
                        name: 'Patroli',
                        type: 'column',
                        data: result.polda_patroli,
                        color: "#E8D42F"
                    }, {
                        name: 'Penjagaan',
                        type: 'column',
                        data: result.polda_penjagaan,
                        color: "#346EFA"
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

                    stroke: {
                        show: true,
                        width: [1, 1, 4, 4],
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: result.polda_name,
                    },
                    yaxis: [{
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                            color: '#008FFB'
                        },
                        // labels: {
                        //     style: {
                        //         colors: '#008FFB',
                        //     }
                        // },


                    }, ],
                };

                var turjagwali = new ApexCharts(document.querySelector("#chartturjagwali"), turjagwali);
                turjagwali.render();
            }
        })

        // $.ajax({
        //     url: "<?php echo base_url(); ?>dashboard/getTripOn",
        //     type: 'POST',
        //     dataType: 'JSON',
        //     success: function(results) {
        //         console.log(results)
        //         var jenis_kendaraan = {
        //             series: results.jumlah,
        //             chart: {
        //                 width: 550,
        //                 type: 'pie',
        //             },
        //             labels: results.type,
        //             responsive: [{
        //                 breakpoint: 480,
        //                 options: {
        //                     chart: {
        //                         width: 200
        //                     },
        //                     legend: {
        //                         position: 'bottom'
        //                     }
        //                 }
        //             }]
        //         };

        //         var jenis_kendaraan = new ApexCharts(document.querySelector("#chartjeniskendaraan"), jenis_kendaraan);
        //         jenis_kendaraan.render();
        //     }
        // })

        // Indonesia
        var initialCenter = [-1.210, 121.9213];

        var initialZoom = 4.8;
        // var initialZoom = 9;
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

    })
</script>