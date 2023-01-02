<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Detail Petugas</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form row" method="post" enctype="multipart/form-data"> 
            <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
            <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <!-- <div class="col-md-12"> 
                    <div class="material-textfield mb-3">
                        <label >Banner</label>
                        <input type="file" name="banner" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                    </div> 
                </div>  -->
                
                <div class="col-md-12">
                    <div class="material-textfield mb-3">
                        <input required style="width: 100%;" name="name_operation" value="<?= $data['getDetail']['data']['name_operation']?>" placeholder="" type="text">
                        <label class="labelmui">Nama Operation</label>
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <div class="material-textfield mb-3">
                        <label>Document Sprint</label>
                        <input type="file" name="sprint" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                    </div>
                </div>  -->
                <!-- <div class="col-md-12">
                    <div class="material-textfield mb-3">
                        <label>Background</label>
                        <input type="file" name="bg" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="material-textfield mb-3">
                        <label>Logo</label>
                        <input type="file" name="logo" class="dropify" id="dropify" data-allowed-file-extensions="jpg png jpeg svg" 
                        <?php if($data['getDetail']['data']['logo'] != null){?>
                            data-default-file="<?php echo url_api();?>logo/<?= $data['getDetail']['data']['logo']?>"
                        <?php }else{?>
                            data-default-file="<?php echo base_url();?>assets/no_image.png"
                        <?php } ?>
                        /> 
                    </div>
                </div>

                <div class="col-md-12" style="display: none;">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Alamat" name="address">
                        <label for="">Alamat</label>
                    </div>
                </div>
                <div id="listAddress" class="col-md-12"></div>
                <div class="col-md-6" style="display: none;">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="cordinate" value="<?= $data['getDetail']['data']['latlng_center']?>" placeholder="" type="text">
                        <label for="">Coordinate</label>
                    </div>
                </div>

                <div class="col-md-12 mt-3 mb-3">
                    <div id="mapG20Kegiatan" style="height: 400px"></div>
                </div>

                <div class="col-md-6" style="display: none;">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="latitude" placeholder="latitude">
                        <label for="latitude">Latitude</label>
                    </div>
                </div>
                <div class="col-md-6" style="display: none;">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="longitude" placeholder="longitude">
                        <label for="longitude">Longitude</label>
                    </div>
                    <input hidden class="form-control" name="zoom_level" id="zoom_level" value="<?= $data['getDetail']['data']['zoom_level']?>" placeholder="" type="text"> 
                </div>


                <div class="col-md-6">
                    <div class="material-textfield mb-3">
                        <input required class="form-control" name="start_date" value="<?= $data['getDetail']['data']['date_start_operation']?>" placeholder="" type="date">
                        <label class="labelmui">Start Date</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="material-textfield mb-3">
                        <input required class="form-control" name="end_date" value="<?= $data['getDetail']['data']['date_end_operation']?>" placeholder="" type="date">
                        <label class="labelmui">End Date</label>
                    </div>
                </div>

                <div class="col-md-12 float-end">
                    <button class="btn btn-primary float-end" type="submit"  style="width: 15%; margin-left: 10px;">Simpan</button>
                    <a href="<?= base_url('user/operator'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 15%;">Kembali</button></a>
                </div>
 
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#dropify').dropify();

       
        var cordLatLong1 = $("[name=cordinate]").val().split(',');
        var cordLat1 = parseFloat(cordLatLong1[0]);
        var corLong1 = parseFloat(cordLatLong1[1]);

        $('[name=cordinate]').val('-1.5707209, 115.4875168');
        var initialCenter = [cordLat1, corLong1];
        var initialZoom = $("#zoom_level").val();
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

        mapContainer.on("dragend", function(e) {

            var corLat = mapContainer.getCenter()['lat'];
            var corLng = mapContainer.getCenter()['lng'];
            var cord = `${corLat},${corLng}`;

            $("[name=latitude]").val(corLat);
            $("[name=longitude]").val(corLng);
            $('[name=cordinate]').val(cord);
            // console.log(e.target._zoom);
            $("#zoom_level").val(e.target._zoom);

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                $('[name=address]').val(data['display_name']);

            });

        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>user/operator/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>user/operator";
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

    $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>user/operator/delete",
            method: "POST",
            data: {
                "id": $(this).data("id"),
            },
            dataType: 'JSON',
            // contentType: false,
            // processData: false,  
            success: function (data) {
                $("#overlay").fadeOut(300);
                if(data['status'] == true){
                    Swal.fire(
                    `${data['message']}`, 
                    '',
                    'success'
                    ).then(function() {  
                        window.location.href = "<?php echo base_url();?>user/operator";
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
</script>