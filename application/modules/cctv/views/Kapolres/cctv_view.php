<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <!-- <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li> -->
    </ol>
</nav>
<!-- </div> -->

<div class="row align-items-center">
    

    <div class="col-md-6">
        <div class="form-floating mb-3">
           
            <select class="form-select" name="kategoriFilter" style="height: 50px;">
                <option selected value="">Pilih Kategori CCTV</option>
                <option value="CCTV MAINROAD">CCTV MAINROAD</option>
                <option value="CCTV GERBANG">CCTV GERBANG</option>
                <option value="CCTV RAMP">CCTV RAMP</option>
                <option value="CCTV ETHLE">CCTV ETHLE</option>
                <option value="BALISATUDATA">BALI SATU DATA</option>
                <option value="CCTV">CCTV</option> 
            </select>
            <label for="kategoriFilter">Filter CCTV</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="searchFilter" placeholder="Search" style="height: 50px;">
                    <label for="searchFilter">Search</label>
                </div>
            </div> 
        </div> 
    </div>
    

</div>
<!-- end row -->
 
<div class="row" id="listCCTV"></div>

<div class="row">
    <input hidden type="text" name="halaman" id="halaman" value="1">
    <div class="col-md-6">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item" id="backHalaman"><a class="page-link" href="javascript:void(0);">Kembali</a></li>
                <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li> -->
                <li class="page-item" id="nextHalaman"><a class="page-link" href="javascript:void(0);">Selanjutnya</a></li>
            </ul>
        </nav>
    </div>
</div>
 
<script>
    $(document).ready(function() { 

        serverSideGetCCTV(); 

        
        
        let countlistCCTV = 0;
        let listCCTV = ""; 
        $('[name=kategoriFilter]').on("change", function (e) {
            countlistCCTV = 0;
            listCCTV = "";
            $('#listCCTV').html(listCCTV); 
            serverSideGetCCTV();
        });
        $('[name=searchFilter]').on("change", function (e) {
            countlistCCTV = 0;
            listCCTV = "";
            $('#listCCTV').html(listCCTV); 
            serverSideGetCCTV();
        });

        // if($('[name=halaman]').val() == 1){
        //     $("#backHalaman").addClass("disabled");
        // }
        $("#backHalaman").on("click", function (e) {
            var nilaiHalaman = parseFloat($('[name=halaman]').val()) - 1;
            if(nilaiHalaman < 1){
                $("#backHalaman").addClass("disabled");
            }else{
                $('[name=halaman]').val(nilaiHalaman);
                serverSideGetCCTV()
            } 
        });
        $("#nextHalaman").on("click", function (e) {
            var nilaiHalaman = parseFloat($('[name=halaman]').val()) + 1;
            if(nilaiHalaman > 1){
                $("#backHalaman").removeClass("disabled");
                $('[name=halaman]').val(nilaiHalaman);
                serverSideGetCCTV()
            }
        });
        function serverSideGetCCTV(){
            $("#overlay").fadeIn(300); 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>masterdata/cctv/getCCTV", 
                data : {
                    "kategoriFilter" : $('[name=kategoriFilter]').val(),
                    "searchFilter": $('[name=searchFilter]').val(),
                    "page": $('[name=halaman]').val(),
                }, 
                dataType : "JSON",
                success : function(result){  
                    let ressData = result['data'];
                    if(ressData.length > 0){

                    }else{

                    } 
                    let ress = ressData.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });   
                    // console.log(result);

                    $("#overlay").fadeOut(300);
                    if(ress.length > 0){   
                        countlistCCTV = 0;
                        listCCTV = "";

                        ress.forEach(el => {
                            if(el.ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<iframe id="myIframe" src="${el.link_cctv}" style="width: 230px; height: 250.25px;"></iframe>`;
                            }else{
                                resource = `<img style="width: 230px;" src="${el.link_cctv}" />`;
                            }
                            countlistCCTV += 1;
                            listCCTV += `
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="dropdown text-end">
                                                <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Edit</a> 
                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                ${resource}
                                                </div>
                                            </div>
                                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">${el.type_cctv}</a></h5>
                                            <p class="text-muted mb-2">${el.address_cctv}</p>
                                            
                                        </div> 
                                    </div> 
                                </div>
                            `;
                            $('#listCCTV').html(listCCTV); 
                        });  
                        
                    }else{
                        listCCTV = "";
                        $('#listCCTV').html(listCCTV); 
                    }
                }
            });
        } 


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
                            // userDataTable.draw(); 
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
</script>