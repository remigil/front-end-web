<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="card-header card-headline">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2> -->
            <h2 style="color: white; text-align:center;">DAFTAR DATA HARIAN OPERASI KHUSUS</h2>
        </div>
    </div>
</div>

<div class="page mt-5">
    <div class="page mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <!-- <div style="width: 25%; float:right; border: 1px; margin-bottom: 10px">
                <input type="search" class="form-control light-table-filter" data-table="table-hower" placeholder="Search..." />
            </div> -->
                <table id="datatable" class="table dt-responsive w-100" style="width: 800px;
        margin: 0 auto;">
                    <thead>
                        <tr class="table-info">
                            <th>No</th>
                            <th>Nama Operasi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Laporan Harian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Tanggal</th>
                            <th>
                                <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus/detaildata/"><button class="btn btn-sm btn-primary">Detail</button></a>
                            </th>
                        </tr>
                        <tr class="table-light">
                            <th>2</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Tanggal</th>
                            <th>
                                <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus/detaildata/"><button class="btn btn-sm btn-primary">Detail</button></a>
                            </th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Tanggal</th>
                            <th>
                                <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus/detaildata/"><button class="btn btn-sm btn-primary">Detail</button></a>
                            </th>
                        </tr>
                        <tr class="table-light">
                            <th>4</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Tanggal</th>
                            <th>
                                <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus/detaildata/"><button class="btn btn-sm btn-primary">Detail</button></a>
                            </th>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Tanggal</th>
                            <th>
                                <a href="<?php echo base_url(); ?>data_harian_opsus/Data_harian_opsus/detaildata/"><button class="btn btn-sm btn-primary">Detail</button></a>
                            </th>
                        </tr>
                        </thead>
                </table>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            scrollX: true,
        });

        $('.dropify').dropify();

        $('[name=cordinate]').val('-1.5707209, 115.4875168');
        var initialCenter = [-1.5707209, 115.4875168];
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
        var mapContainer = L.map('mapG20Kegiatan', {
            maxZoom: 20,
            minZoom: 1,
            zoomSnap: 0.25,
            zoomControl: false,
            layers: [googleStreet]
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

        $('#myModal').on('shown.bs.modal', function() {
            mapContainer.invalidateSize();

            $('.dropify').dropify();



            let countlist = 0;
            let list = "";
            $('[name=address]').on("change", function(e) {
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
                        $('#listAddress').html(list);
                    });

                    if (list == "") {
                        countlist = 0;
                        list = "";
                        $('#listAddress').html(list);
                    }


                    for (let i = 0; i < ress.length; i++) {
                        $(`#list${i+1}`).click(function() {
                            var latlong = $(this).data('cords').split(',');
                            var latitude = parseFloat(latlong[0]);
                            var longitude = parseFloat(latlong[1]);

                            $("[name=latitude]").val(latitude);
                            $("[name=longitude]").val(longitude);

                            // console.log({a:latitude, b:longitude});
                            $('[name=address]').val($(this).data('alamat'));
                            $('[name=cordinate]').val($(this).data('cords'));
                            mapContainer.flyTo([latitude, longitude], 17);
                        });
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

                $("[name=latitude]").val(corLat);
                $("[name=longitude]").val(corLng);
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                    $('[name=address]').val(data['display_name']);

                });

            });


        });

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

                url: '<?php echo base_url(); ?>masterdata/Fasilitasumum/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    data.filterCateg = '';

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
                    data: 'fasum_name'
                },
                {
                    data: 'category_fasum'
                },
                {
                    data: 'fasum_address'
                },
                {
                    data: 'fasum_phone'
                },
                {
                    data: 'jam_operasional',
                    orderable: false
                },
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

    });

    function detail(id) {
        $.ajax({
            url: '<?= base_url() ?>masterdata/Fasilitasumum/detailFasum/',
            type: 'POST',
            data: {
                id_fasum: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.DetailFasum,#namaFasum').attr('disabled', true)
                $('.DetailFasum,#jenisFasum').attr('disabled', true)
                $('.DetailFasum,#address').attr('disabled', true)
                $('.DetailFasum,#latitude').attr('disabled', true)
                $('.DetailFasum,#longitude').attr('disabled', true)
                $('.DetailFasum,#deskripsiFasum').attr('disabled', true)
                $('.DetailFasum,#kontakFasum').attr('disabled', true)
                $('.DetailFasum,#statusFasum').attr('disabled', true)
                $('.DetailFasum,#photo').attr('disabled', true)
                $('.DetailFasum,#jamBuka').attr('disabled', true)
                $('.DetailFasum,#jamTutup').attr('disabled', true)

                $('.DetailFasum,#namaFasum').val(results.fasum_name)
                $('.DetailFasum,#jenisFasum').val(results.fasum_type)
                $('.DetailFasum,#address').val(results.fasum_address)
                $('.DetailFasum,#latitude').val(results.fasum_lat)
                $('.DetailFasum,#longitude').val(results.fasum_lng)
                $('.DetailFasum,#deskripsiFasum').val(results.fasum_description)
                $('.DetailFasum,#kontakFasum').val(results.fasum_phone)
                $('.DetailFasum,#statusFasum').val(results.fasum_status)
                $('.DetailFasum,#photo').val(results.fasum_logo)
                $('.DetailFasum,#jamBuka').val(results.fasum_open_time)
                $('.DetailFasum,#jamTutup').val(results.fasum_close_time)
            }
        })
    }
</script>
