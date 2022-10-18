<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Kendaraan</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahKendaraan">Tambah Kendaraan</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Bahan Bakar</th>
                        <th>Merek</th>
                        <th>Kepemilikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" enctype="multipart/form-data"> 
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="noKendaraan" placeholder="" type="text">
                        <label class="labelmui">No Kendaraan</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select" name="jenisKendaraan" id="select">
                            <option selected value=""> Jenis Kendaraan</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Sepeda Motor">Sepeda Motor</option>
                            <option value="Tanpa Kendaraan">Tanpa Kendaraan</option>
                        </select>
                        <!-- <label class="labelmui">Jenis Kendaraan</label> -->
                    </div>


                    <div class="material-selectfield mb-3">
                        <select class="form-select" name="jenisBahanBakar" id="select2">
                            <option selected value="">Jenis Bahan Bakar</option>
                            <?php foreach($data['getFuel'] as $row): ?>
                                <option value="<?php echo $row['name_fuelVehicle'];?>"><?php echo $row['name_fuelVehicle'];?></option> 
                            <?php endforeach; ?>  
                        </select>
                        <!-- <label class="labelmui">Jenis Bahan Bakar</label> -->
                    </div>

                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="merek" placeholder="" type="text">
                        <label class="labelmui">Merek</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select class="form-select" name="kepemilikan" id="select3">
                            <option selected value="">Kepemilikan</option>

                            <?php foreach($data['getOwnership'] as $row): ?>
                                <option value="<?php echo $row['name_ownershipVehicle'];?>"><?php echo $row['name_ownershipVehicle'];?></option> 
                            <?php endforeach; ?>  
 
                        </select>
                        <!-- <label class="labelmui">Kepemilikan</label> -->
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade SettingKendaraan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Kendaraan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formDetail" method="post" enctype="multipart/form-data"> 
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" placeholder="" type="text">
                        <label class="labelmui">No Kendaraan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;"  placeholder="" type="text">
                        <label class="labelmui">Jenis Kendaraan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" placeholder="" type="text">
                        <label class="labelmui">Merek</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" placeholder="" type="text">
                        <label class="labelmui">Kepemilikan</label>
                    </div>
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->


<script>
    $(document).ready(function() {
        // $('#datatable').DataTable();
        new Choices('#select', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        }); 

        new Choices('#select2', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        }); 

        new Choices('#select3', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        }); 
        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete : function (settings, json) { },

            retrieve : true,

            processing : true,

            serverSide: true,

            serverMethod: 'POST',

            ajax : {

                dataType: 'json',

                url: '<?php echo base_url();?>operasi/kendaraan/serverSideTable',

                data: function(data){

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

                beforeSend: function (xhr, settings) {
                     
                },

                "dataSrc": function (result) { 

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [ 

                { data: 'id'}, 

                { data: 'no_vehicle'},

                { data: 'type_vehicle'}, 
                { data :'fuel_vehicle'},

                { data: 'brand_vehicle'},

                { data: 'ownership_vehicle'},  

                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 

            }   

        }); 

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Kendaraan/store",
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
                            $(".TambahKendaraan").modal('hide');
                            userDataTable.draw();
                            // window.location.href = "<?php echo base_url();?>operasi/Kendaraan";
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
</script>