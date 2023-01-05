<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Detail Kendaraan</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data"> 
            <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT KENDARAAN</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">  
                        <div class="row">
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="noKendaraan" value="<?php echo $data['getDetail']['data']['no_vehicle'];?>" type="text">
                                    <label class="labelmui">Nomor Kendaraan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="merek" value="<?php echo $data['getDetail']['data']['brand_vehicle'];?>" type="text">
                                    <label class="labelmui">Merek</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="no_mesin" value="<?php echo $data['getDetail']['data']['no_engine'];?>" type="text">
                                    <label class="labelmui">Nomor Mesin</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select class="form-select" name="jenisKendaraan" id="select">
                                        <option <?php echo ($data['getDetail']['data']['type_vehicle'] == null ? 'selected' : '');?> value="">Pilih Jenis Kendaraan</option>
                                        <option <?php echo ($data['getDetail']['data']['type_vehicle'] == 'Sepeda Motor' ? 'selected' : '');?> value="Sepeda Motor">Sepeda Motor</option>
                                        <option <?php echo ($data['getDetail']['data']['type_vehicle'] == 'Mobil' ? 'selected' : '');?> value="Mobil">Mobil</option>
                                        <option <?php echo ($data['getDetail']['data']['type_vehicle'] == 'Tanpa Kendaraan' ? 'selected' : '');?> value="Tanpa Kendaraan">Tanpa Kendaraan</option>
                                    </select>
                                    <!-- <label class="labelmui">Jenis</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select class="form-select" name="jenisBahanBakar" id="select2">
                                        <option selected>Pilih Jenis Bahan Bakar</option>
                                        <?php foreach($data['getFuel'] as $row): ?>
                                            <option <?php echo ($data['getDetail']['data']['fuel_vehicle'] == $row['name_fuelVehicle'] ? 'selected' : '');?> value="<?php echo $row['name_fuelVehicle'];?>"><?php echo $row['name_fuelVehicle'];?></option> 
                                        <?php endforeach; ?>  
                                    </select>
                                    <!-- <label class="labelmui">Jenis Bahan Bakar</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select class="form-select" name="kepemilikan" id="select3">
                                        <option <?php echo ($data['getDetail']['data']['ownership_vehicle'] == null ? 'selected' : '');?>  value="">Pilih Kepemilikan</option>

                                        <?php foreach($data['getOwnership'] as $row): ?>
                                            <option <?php echo ($data['getDetail']['data']['ownership_vehicle'] == $row['name_ownershipVehicle'] ? 'selected' : '');?> value="<?php echo $row['name_ownershipVehicle'];?>"><?php echo $row['name_ownershipVehicle'];?></option> 
                                        <?php endforeach; ?>  
                                    </select>
                                    <!-- <label class="labelmui">Kepemilikan</label> -->
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <a href="<?= base_url('operasi/Kendaraan'); ?>" class="btn btn-sm btn-primary float-end w-25">Kembali</a>
                </div>
            </form> 
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
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
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Kendaraan/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>operasi/Kendaraan";
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
            url: "<?php echo base_url();?>operasi/Kendaraan/delete",
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
                        window.location.href = "<?php echo base_url();?>operasi/Kendaraan";
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