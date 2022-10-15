<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Jadwal Kegiatan</li>
        <li class="breadcrumb-item">Detail Jadwal Kegiatan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data"> 
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT JADWAL KEGIATAN</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="row">  
                            <div class="col-md-12 mb-3"> 
                                <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" 
                                <?php if($data['getDetail']['data']['photo_schedule'] != null){?>
                                    data-default-file="<?php echo url_api();?>schedule/<?php echo $data['getDetail']['data']['photo_schedule'];?>"  
                                <?php }else{?>
                                    data-default-file="<?php echo base_url();?>assets/no_image.png"
                                <?php }?>
                                /> 
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="kegiatan" value="<?php echo $data['getDetail']['data']['activity'];?>" type="text">
                                    <label class="labelmui">Kegiatan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_category" id="id_category" style="height: 200px;" > 
                                        <option selected value="">Pilih Kategori</option>  
                                        <?php foreach($data['getCategorySchedule'] as $row): ?>
                                            <option 
                                            <?php if ($data['getDetail']['data']['id_category_schedule'] != null){?>
                                                <?php echo ($row['name_category_schedule'] == $data['getDetail']['data']['category_schedule']['name_category_schedule'] ? 'selected' : '');?>  
                                            <?php } ?>
                                            
                                            value="<?php echo $row['id'];?>"><?php echo $row['name_category_schedule'];?></option> 
                                        <?php endforeach; ?> 
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Kategori</label>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_vip[]" id="id_vip" style="height: 200px" multiple> 
                                        <?php foreach($data['getVip'] as $row): ?>
                                            <option 
                                            <?php foreach($data['getDetail']['data']['vips'] as $rowV): ?> 
                                                <?php echo ($rowV['name_vip'] == $row['name_vip'] ? 'selected' : '');?> 
                                            <?php endforeach; ?> 
                                            value="<?php echo $row['id'];?>"><?php echo $row['name_vip'];?>
                                            </option> 
                                        <?php endforeach; ?> 
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">VIP</label>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select required name="id_account[]" id="id_account" style="height: 200px;" multiple> 
                                        <?php foreach($data['getAccount'] as $row): ?>
                                            <option 
                                            <?php foreach($data['getDetail']['data']['accounts'] as $rowV): ?> 
                                                <?php echo ($rowV['name_account'] == $row['name_account'] ? 'selected' : '');?> 
                                            <?php endforeach; ?> 
                                            value="<?php echo $row['id'];?>"><?php echo $row['name_account'];?>
                                            </option>  
                                        <?php endforeach; ?> 
                                    </select>
                                    <label style="margin-top: -20px;font-size: 14px;" class="labelmui">Tim</label>
                                </div>
                            </div>  -->

                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required style="width: 100%;" name="date" id="datepicker" class="form-control" value="<?php echo substr($data['getDetail']['data']['date_schedule'],0,10);?>" type="date" >
                                    <label class="labelmui">Tanggal</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="startTime" class="form-control" id="startTime" value="<?php echo substr($data['getDetail']['data']['start_time'],0,5);?>" data-default="<?php echo substr($data['getDetail']['data']['start_time'],0,5);?>"> 
                                    <label class="labelmui">Waktu Mulai</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input required type="text" name="endTime" class="form-control" id="endTime" value="<?php echo substr($data['getDetail']['data']['end_time'],0,5);?>" data-default="<?php echo substr($data['getDetail']['data']['end_time'],0,5);?>"> 
                                    <label class="labelmui">Waktu Selesai</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="address" value="<?php echo $data['getDetail']['data']['address_schedule'];?>" type="text" required>
                                    <label class="labelmui">Alamat</label>
                                </div> 
                                <div class="list-group" id="listAddress"></div>
                            </div> 
                            <div class="col-md-6" style="display: none;">
                                <div class="material-textfield mb-3">
                                <input style="width: 100%;" name="cordinate" value="<?php echo $data['getDetail']['data']['coordinate_schedule'];?>" type="text">
                                    <label class="labelmui">Coordinate</label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div id="mapG20Kegiatan" style="height: 400px">
                                    <img src="<?php echo base_url();?>assets/pin.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <a href="<?= base_url('operasi/Kegiatan'); ?>" class="btn btn-sm btn-primary float-end w-25" style="height:5vh ;">Kembali</a>
                </div>
            </form>
        </div>
    </div>





    <script>
    $(document).ready(function() {
        $('.dropify').dropify();

        new Choices('#id_category', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });

        $('#startTime').clockpicker({
            autoclose: true
        });
        $('#endTime').clockpicker({
            autoclose: true
        });
 
        // new Choices('#id_vip', {
        //     searchEnabled: true,
        //     removeItemButton: true,
        //     removeItems: true,
        //     itemSelectText: '',
        //     classNames: {
        //         containerOuter: 'choices select-choices',
        //     },
        // });

        // new Choices('#id_account', {
        //     searchEnabled: true,
        //     removeItemButton: true,
        //     removeItems: true,
        //     itemSelectText: '',
        //     classNames: {
        //         containerOuter: 'choices select-choices',
        //     },
        // });



 
        var initialCenter = [-8.751740, 115.149643];
        var initialZoom = 11.65;
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
            layers: [googleHybrid]
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


        var latlong11 =  $('[name=cordinate]').val().split(',');
        var latitude11 = parseFloat(latlong11[0]);
        var longitude11 = parseFloat(latlong11[1]); 
        mapContainer.flyTo([latitude11, longitude11], 17);  


        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Kegiatan/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>operasi/Kegiatan";
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
            url: "<?php echo base_url();?>operasi/Kegiatan/delete",
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
                        window.location.href = "<?php echo base_url();?>operasi/Kegiatan";
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