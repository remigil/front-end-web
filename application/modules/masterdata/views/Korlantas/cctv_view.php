<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah CCTV</button>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url()?>masterdata/cctv" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url()?>masterdata/cctv/thumbnail" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                    </li>
                </ul>
            </div> 
        </div>

    </div>
</div>
<!-- end row -->

<!-- </div> -->
<div class="page">  
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Alamat IP</th>
                        <th>Alamat</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<!-- ADD Modals -->
<div class="modal fade " id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah CCTV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formAdd" method="post" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="type_cctv" placeholder="Type CCTV">
                                <label for="type_cctv">Type CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="ip_cctv" placeholder="Alamat Ip">
                                <label for="ip_cctv">Alamat IP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="isi nama samsat">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="link_cctv" placeholder="isi nama samsat">
                                <label for="link_cctv">Link CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gateway_cctv" placeholder="isi nama samsat">
                                <label for="gateway_cctv">Gateway CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" placeholder="isi nama samsat">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="address" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" name="cordinate" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div id="mapG20Dashboard" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>
                     
                    <button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade UbahCCTV" id="" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit CCTV</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" id="form_edit" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="" id="id_cctv" type="text">
				<div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="type_cctv" placeholder="Type CCTV">
                                <label for="type_cctv">Type CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="ip_cctv" placeholder="Alamat Ip">
                                <label for="ip_cctv">Alamat IP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="isi nama samsat">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="link_cctv" placeholder="isi nama samsat">
                                <label for="link_cctv">Link CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gateway_cctv" placeholder="isi nama samsat">
                                <label for="gateway_cctv">Gateway CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" placeholder="isi nama samsat">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input name="address" class="form-control" placeholder="Alamat" type="text" required>
                                <label for="address">Alamat</label>
                            </div> 
                            <div class="list-group" id="listAddress"></div>
                        </div> 
                        <div class="col-md-6" style="display: none;">
                            <div class="form-floating mb-3">
                            <input style="width: 100%;" name="cordinate" class="form-control" type="text">
                                <label for="cordinate">Coordinate</label>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div id="mapG20Dashboard" style="height: 400px">
                                <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                            </div>
                        </div>
                    </div>

					<button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Detail Modals -->
<div class="modal fade bs-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="nama" placeholder="isi nama samsat">
                                <label for="nama_akun">Nama CCTV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="provinsi" placeholder="isi nama samsat">
                                <label for="nama_akun">Provinsi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="username" placeholder="isi nama samsat">
                                <label for="nama_akun">Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="alamat" placeholder="isi nama samsat">
                                <label for="nama_akun">Alamat IP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="kota" placeholder="isi nama samsat">
                                <label for="nama_akun">Kota</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="password" placeholder="isi nama samsat">
                                <label for="nama_akun">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="latitude" placeholder="isi nama samsat">
                                <label for="nama_akun">Latitude</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" name="longitude" placeholder="isi nama samsat">
                                <label for="nama_akun">Longitude</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect float-end me-4" id="btn_edit" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() { 

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

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>masterdata/cctv/serverSideTable',

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
                    data: 'type_cctv'
                }, 
                {
                    data: 'ip_cctv'
                },
                {
                    data: 'address_cctv'
                }, 
                {
                    data: 'lat_cctv'
                }, 
                {
                    data: 'lng_cctv'
                }, 
                {
                    data: 'status_cctv'
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



        $('[name=cordinate]').val('-8.451740, 115.089643');
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
        var mapContainer = L.map('mapG20Dashboard', {
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

        $('#addModal').on('shown.bs.modal', function() { 
            mapContainer.invalidateSize();

            let countlist = 0;
            let list = ""; 
            $('[name=address]').on("change", function (e) {
                // console.log(this.value);
                $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress){
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

                            // console.log({a:latitude, b:longitude});
                            $('[name=address]').val($(this).data('alamat'));
                            $('[name=cordinate]').val($(this).data('cords'));
                            mapContainer.flyTo([latitude, longitude], 17);    
                        });
                    }
                });

            });


            $('[name=cordinate]').on("change", function (e) {

                var cordLatLong =  this.value.split(','); 
                var cordLat = parseFloat(cordLatLong[0]); 
                var corLong = parseFloat(cordLatLong[1]); 

                // console.log({a:cordLat, b:corLong});

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data){
                    $('[name=address]').val(data['display_name']); 
                    mapContainer.flyTo([cordLat, corLong], 17);  
                }); 
            });


            mapContainer.on("dragend", function (e) {

                var corLat = mapContainer.getCenter()['lat'];
                var corLng = mapContainer.getCenter()['lng'];
                var cord = `${corLat},${corLng}`;
                $('[name=cordinate]').val(cord);

                $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data){

                    $('[name=address]').val(data['display_name']); 

                }); 

            }); 


        }); 

        $(".formAdd").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.formAdd')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>masterdata/cctv/store",
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
                            $("#addModal").modal('hide');
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

    });



    $('.detailRow').on('click', function() {
        $('#detailModal').modal('show')
        $('.modal-title').text('Detail CCTV')
        $('[name="nama"]').val($(this).data('nama'))
        $('[name="alamat"]').val($(this).data('ip'))
        $('[name="provinsi"]').val($(this).data('provinsi'))
        $('[name="kota"]').val($(this).data('kota'))
        $('[name="latitude"]').val($(this).data('lat'))
        $('[name="longitude"]').val($(this).data('long'))
        $('[name="username"]').val($(this).data('username'))
        $('[name="password"]').val($(this).data('password'))
        $('#submit_edit').hide()
    })

    $('.editRow').on('click', function() {
        $('.modal-title').text('Ubah Akun')
        $('#detailModal').modal('show')
        $('[name="nama_akun"]').val($(this).data('akun'))
        $('[name="password"]').val($(this).data('password'))
        $('[name="tingkat"]').val($(this).data('tingkat'))
        $('[name="akses"]').val($(this).data('akses'))
        $('#submit_edit').show()
    })

    function hapus() {
        Swal.fire({
            title: '',
            text: "Apakah anda ingin menghapus data ini ?",
            icon: 'question',
            iconColor: '#ED171D',
            showCancelButton: true,
            cancelButtonColor: '#003A91',
            confirmButtonColor: '#ED171D',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }

	function detailEdit(id) {
        $.ajax({
            url: '<?= base_url() ?>Cctv/detailBerita/',
            type: 'POST',
            data: {
                id_berita: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.UbahCCTV,input').attr('readonly', false)
                $('.UbahCCTV,input,#category').attr('disabled', false)
                $('#id_berita').val(results.id)
                $('.UbahCCTV,#title').val(results.title)
                $('.UbahCCTV,#category').val(results.news_category)
                $('.UbahCCTV,#content').val(results.content)
            }
        })
    }

	$('#btn_edit').on('click', function(e) {
        e.preventDefault()
        var formData = new FormData($('#form_edit')[0]);
        $.ajax({
            url: '<?= base_url() ?>Cctv/updateCCTV',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(results) {
                $("#overlay").fadeOut(300);
                if (results['status'] == true) {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'success'
                    ).then(function() {
                        $(".UbahCCTV").modal('hide');
                        userDataTable.draw();
                    });
                } else {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'error'
                    ).then(function() {});
                }
            }
        })
    })
</script>
