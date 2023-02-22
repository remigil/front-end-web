<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">
                <?= $title; ?>
            </a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <!-- <button type="button" class="btn btn-primary waves-effect mb-2" id="btnTambah" data-bs-toggle="modal" data-bs-target=".TambahVisimisi">Tambah Visimisi</button> -->
    <div class="card">

        <div class="card-body">

            <form action="" class="form row" id="form_tambah" method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <input type="hidden" name="id" value="<?php echo $data["fungsilain"]["id"] ?>" style="display: none">


                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="file" name="logo_fungsi" class="dropify"
                            data-allowed-file-extensions="jpg png jpeg" <?php if ($data["fungsilain"]['logo_fungsi'] != null) { ?>
                                data-default-file="<?php echo url_api(); ?>fungsilain/logo/<?php echo $data["fungsilain"]['logo_fungsi']; ?>"
                            <?php } else { ?> data-default-file="<?php echo base_url(); ?>assets/no_image.png" <?php } ?> />
                        <label for="logo_fungsi">Logo</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="nama"
                            value="<?php echo $data["fungsilain"]["name_fungsi"] ?>" name="name_fungsi">
                        <label for="name_fungsi">Nama Fungsi</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Full Name"
                            value="<?php echo $data["fungsilain"]["fullname_fungsi"] ?>" name="fullname_fungsi">
                        <label for="fullname_fungsi">Detail Nama Fungsi</label>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Email"
                            value="<?php echo $data["fungsilain"]["email_fungsi"] ?>" name="email_fungsi">
                        <label for="email_fungsi">Email</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="No Telpon"
                            value="<?php echo $data["fungsilain"]["phone_fungsi"] ?>" name="phone_fungsi">
                        <label for="phone_fungsi">No Telpon</label>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Alamat"
                            value="<?php echo $data["fungsilain"]["address_fungsi"] ?>" name="address_fungsi">
                        <label for="address_fungsi">Alamat</label>
                    </div>
                    <div class="list-group" id="listAddress"></div>
                </div>
                <div class="col-md-6" style="display: none;">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                        <label for="">Coordinate</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="latitude_fungsi"
                                value="<?php echo $data["fungsilain"]["latitude_fungsi"] ?>"
                                placeholder="latitude_fungsi">
                            <label for="latitude_fungsi">Latitude</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="longitude_fungsi"
                                value="<?php echo $data["fungsilain"]["longitude_fungsi"] ?>"
                                placeholder="longitude_fungsi">
                            <label for="longitude_fungsi">Longitude</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <div id="mapG20Kegiatan" style="height: 400px">
                        <img src="<?php echo base_url(); ?>assets/pin.png" width="80" height="80"
                            style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Facebook"
                            value="<?php echo $data["fungsilain"]["facebook_fungsi"] ?>" name="facebook_fungsi">
                        <label for="facebook_fungsi">Facebook</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Twitter"
                            value="<?php echo $data["fungsilain"]["twitter_fungsi"] ?>" name="twitter_fungsi">
                        <label for="twitter_fungsi">Twitter</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Instagram"
                            value="<?php echo $data["fungsilain"]["instagram_fungsi"] ?>" name="instagram_fungsi">
                        <label for="instagram_fungsi">Instagram</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Youtube"
                            value="<?php echo $data["fungsilain"]["youtube_fungsi"] ?>" name="youtube_fungsi">
                        <label for="youtube_fungsi">Youtube</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Link Youtube"
                            value="<?php echo $data["fungsilain"]["link_youtube_fungsi"] ?>" name="link_youtube_fungsi">
                        <label for="link_youtube_fungsi">Link Youtube</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="Website"
                            value="<?php echo $data["fungsilain"]["website_fungsi"] ?>" name="website_fungsi">
                        <label for="website_fungsi">Website</label>
                    </div>
                </div>


                <label class="mt-3">Galeri</label><br><br>


                <?php if (count($data["fungsilain"]["dokumenfungsilains"]) != 0) { ?>
                    <?php for ($i = 0; $i < count($data["fungsilain"]["dokumenfungsilains"]); $i++) { ?>
                        <div class="col-md-12 mb-3" id="dynamic_fieldEdit">

                            <div class="row mb-2" id="removeEdit<?= $i ?>">
                                <input hidden type="text" name="idDokumenEdit[]" class="form-control name_listEdit"
                                    value="<?php echo $data["fungsilain"]["dokumenfungsilains"][$i]['id'] ?>">

                                <div class="col-md-6 mb-2">
                                    <div class="form-floating">
                                        <input type="text" name="descriptionEdit[]" class="form-control name_listEdit"
                                            value="<?php echo ($data["fungsilain"]["dokumenfungsilains"] ? $data["fungsilain"]["dokumenfungsilains"][$i]['description'] : '') ?>">
                                        <label for="description" class="form-label">Keterangan</label>
                                    </div>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <div style="display: flex;">
                                        <?php if ($data["fungsilain"]["dokumenfungsilains"][$i]['foto'] != null) { ?>
                                            <img src="<?php echo url_api(); ?>fungsilain/galeri/<?php echo $data["fungsilain"]["dokumenfungsilains"][$i]['foto']; ?>"
                                                alt="" class="rounded-circle avatar-md">
                                        <?php } else { ?>
                                            <img src="<?php echo base_url(); ?>assets/no_image.png" alt=""
                                                class="rounded avatar-md">
                                        <?php } ?>

                                        <input type="file" name="fotoEdit[]" style="margin-left: 5px; margin-top: 10px;"
                                            class="form-control name_listEdit">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" name="remove"
                                        id="<?= $data["fungsilain"]["dokumenfungsilains"][$i]['id'] ?>"
                                        class="btn btn-danger btn_removeEdit">X</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

                <div class="col-md-12 mb-3" id="dynamic_field">
                    <div class="row mb-2">
                        <div class="col-md-6 mb-2">
                            <div class="form-floating">
                                <input type="text" name="description[]" class="form-control name_list">
                                <label for="description" class="form-label">Keterangan</label>
                            </div>
                        </div>
                        <div class="col-md-5 mb-2">
                            <input type="file" name="foto[]" style="margin-top: 10px;" class="form-control name_list">
                        </div>
                        <div class="col-md-1">

                            <button type="button" name="add" id="add" class="btn btn-success">+</button>

                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary waves-effect float-end"
                        style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                        <a href="<?php echo base_url('masterdata/Fungsilain'); ?>" class="btn btn-secondary waves-effect float-end" style="width: 25%; letter-spacing: 2px; border:1;">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- End Page -->



<script>
    $(document).ready(function () {
        $('.dropify').dropify();



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

        let lat = $("[name=latitude_fungsi]").val();
        let lng = $("[name=longitude_fungsi]").val();
        mapContainer.flyTo([parseFloat(lat), parseFloat(lng)], 17);

        let countlist = 0;
        let list = "";
        $('[name=address_fungsi]').on("change", function (e) {
            // console.log(this.value);
            $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function (ress) {
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
                    $(`#list${i + 1}`).click(function () {
                        var latlong = $(this).data('cords').split(',');
                        var latitude = parseFloat(latlong[0]);
                        var longitude = parseFloat(latlong[1]);

                        $("[name=latitude_fungsi]").val(latitude);
                        $("[name=longitude_fungsi]").val(longitude);

                        // console.log({a:latitude, b:longitude});
                        $('[name=address_fungsi]').val($(this).data('alamat'));
                        $('[name=cordinate]').val($(this).data('cords'));
                        mapContainer.flyTo([latitude, longitude], 17);
                        $('#listAddress').html("");
                    });
                }
            });

        });


        $('[name=cordinate]').on("change", function (e) {

            var cordLatLong = this.value.split(',');
            var cordLat = parseFloat(cordLatLong[0]);
            var corLong = parseFloat(cordLatLong[1]);

            // console.log({a:cordLat, b:corLong});

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function (data) {
                $('[name=address_fungsi]').val(data['display_name']);
                mapContainer.flyTo([cordLat, corLong], 17);
            });
        });


        mapContainer.on("dragend", function (e) {

            var corLat = mapContainer.getCenter()['lat'];
            var corLng = mapContainer.getCenter()['lng'];
            var cord = `${corLat},${corLng}`;

            $("[name=latitude_fungsi]").val(corLat);
            $("[name=longitude_fungsi]").val(corLng);
            $('[name=cordinate]').val(cord);

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function (data) {

                $('[name=address_fungsi]').val(data['display_name']);

            });

        });

        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append(`
            <div class="row mb-2" id="remove${i}">
                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" name="description[]" class="form-control name_list" >
                        <label for="description" class="form-label">Keterangan</label>
                    </div>
                </div>
                <div class="col-md-5 mb-2"> 
                    <input type="file" name="foto[]" style="margin-top: 10px;"
                        class="form-control name_list">
                </div> 
                <div class="col-md-1">
                    <button type="button" name="remove" id="${i}" class="btn btn-danger btn_remove">X</button>
                </div>
            </div>
            `);
        });

        $(document).on('click', '.btn_remove', function () {
            var i = $(this).attr("id");
            $('#remove' + i + '').remove();
        });






        $(document).on('click', '.btn_removeEdit', function () {
            var id = $(this).attr("id");
            // console.log(id);
            Swal.fire({
                title: 'Apakah anda ingin menghapus data ini?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#C61318',
                cancelButtonColor: '#003A91',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>masterdata/Fungsilain/hapusDokumen",
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: 'JSON',
                        success: function (data) {
                            $("#overlay").fadeOut(300);
                            if (data['status'] == true) {
                                Swal.fire(
                                    `${data['message']}`,
                                    '',
                                    'success'
                                ).then(function () {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    `${data['message']}`,
                                    '',
                                    'error'
                                ).then(function () { });
                            }
                        }
                    });
                }
            })
        });




        $('#btnTambah').on('click', function (e) {
            $('#form_tambah')[0].reset()
        })
        $('#btnEdit').on('click', function (e) {
            $('#form_edit')[0].reset()
        })
    });

    $(".form").submit(function (e) {
        $("#overlay").fadeIn(300);

        e.preventDefault();
        var formData = new FormData($('.form')[0]);
        $.ajax({
            url: "<?php echo base_url(); ?>masterdata/Fungsilain/storeUpdate",
            method: "POST",
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function (data) {
                $("#overlay").fadeOut(300);
                if (data['status'] == true) {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'success'
                    ).then(function () {
                        window.location.href = "<?php echo base_url(); ?>masterdata/Fungsilain";
                    });
                } else {
                    Swal.fire(
                        `${data['message']}`,
                        '',
                        'error'
                    ).then(function () {
                        // location.reload();
                    });
                }
            }
        });
    });
</script>