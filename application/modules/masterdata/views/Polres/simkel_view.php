<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Tambah SIM Keliling</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama SIM Keliling</th>
                        <th>Alamat</th>
                        <th>Jam Operasional</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>SIM Kel 01</td>
                        <td>KM 01 Jagorawi</td>
                        <td>07.00 - 21.00</td>
                        <td>
                            <div class="d-flex flex-row justify-content-between">
                                <button style="background-color:transparent ; border:none" class="detailRow" data-samsat="SIM Kel 01" data-alamat="KM 01 Jagorawi" data-jb="07:00" data-jt="21:00">
                                    <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" class="editRow" data-samsat="SIM Kel 01" data-alamat="KM 01 Jagorawi" data-jb="07:00" data-jt="21:00">
                                    <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" onclick="hapus()">
                                    <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SIM Kel 02</td>
                        <td>Jl. Raya Bogor</td>
                        <td>05.00 - 22.00</td>
                        <td>
                            <div class="d-flex flex-row justify-content-between">
                                <button style="background-color:transparent ; border:none" class="detailRow" data-samsat="SIM Kel 02" data-alamat="Jl. Raya Bogor" data-jb="05:00" data-jt="22:00">
                                    <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" class="editRow" data-samsat="SIM Kel 02" data-alamat="Jl. Raya Bogor" data-jb="05:00" data-jt="22:00">
                                    <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" onclick="hapus()">
                                    <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>SIM Kel 03</td>
                        <td>Jl. Sholeh Iskandar</td>
                        <td>05.00 - 20.00</td>
                        <td>
                            <div class="d-flex flex-row justify-content-between">
                                <button style="background-color:transparent ; border:none" class="detailRow" data-samsat="SIM Kel 03" data-alamat="Jl. Sholeh Iskandar" data-jb="05:00" data-jt="20:00">
                                    <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" class="editRow" data-samsat="SIM Kel 03" data-alamat="Jl. Sholeh Iskandar" data-jb="05:00" data-jt="20:00">
                                    <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" onclick="hapus()">
                                    <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>SIM Kel 04</td>
                        <td>Jl. Raya Bogor</td>
                        <td>05.00 - 21.00</td>
                        <td>
                            <div class="d-flex flex-row justify-content-between">
                                <button style="background-color:transparent ; border:none" class="detailRow" data-samsat="SIM Kel 04" data-alamat="Jl. Raya Bogor" data-jb="05:00" data-jt="21:00">
                                    <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" class="editRow" data-samsat="SIM Kel 04" data-alamat="Jl. Raya Bogor" data-jb="05:00" data-jt="21:00">
                                    <h3 style=" color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" onclick="hapus()">
                                    <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>SIM Kel 05</td>
                        <td>Jl. Raya Bogor Cibinong</td>
                        <td>05.00 - 21.00</td>
                        <td>
                            <div class="d-flex flex-row justify-content-between">
                                <button style="background-color:transparent ; border:none" class="detailRow" data-samsat="SIM Kel 05" data-alamat="Jl. Raya Bogor Cibinong" data-jb="05:00" data-jt="21:00">
                                    <h3 style=" color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" class="editRow" data-samsat="SIM Kel 05" data-alamat="Jl. Raya Bogor Cibinong" data-jb="05:00" data-jt="21:00">
                                    <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                </button>
                                <button style="background-color:transparent ; border:none" onclick="hapus()">
                                    <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<!-- ADD Modals -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah Sim Keliling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" placeholder="isi nama samsat">
                                <label for="nama_akun">Nama Sim Keliling</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi alamat" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>
                            <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary waves-effect float-end" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modals -->
<div class="modal fade bs-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_samsat" placeholder="isi nama samsat" name="nama_samsat">
                                <label for="nama_akun">Nama Samsat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" name="nama_alamat" placeholder="isi alamat" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>
                            <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" name="jb" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" name="jt" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        $('#datatable').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Semua']
            ]
        });
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

    $('.detailRow').on('click', function() {
        $('#detailModal').modal('show')
        $('.modal-title').text('Detail Samsat')
        $('[name="nama_samsat"]').val($(this).data('samsat'))
        $('[name="nama_alamat"]').val($(this).data('alamat'))
        $('[name="jb"]').val($(this).data('jb'))
        $('[name="jt"]').val($(this).data('jt'))
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