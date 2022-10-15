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
            <form class="form" method="post" enctype="multipart/form-data"> 
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT PETUGAS</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-5">
                            <div class="col-md-4 mb-3"></div>
                            <div class="col-md-4 mb-3">
                                <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" 
                                data-default-file="<?php echo base_url();?>assets/no_image.png"  

                                <?php if($data['getDetail']['data']['photo_officer'] != null){?>
                                    data-default-file="<?php echo url_api();?>officer/<?php echo $data['getDetail']['data']['photo_officer'];?>"  
                                <?php }else{?>
                                    data-default-file="<?php echo base_url();?>assets/no_image.png"
                                <?php }?>
                                />
                            </div>
                            <div class="col-md-4 mb-3"></div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="namapetugas" value="<?php echo $data['getDetail']['data']['name_officer'];?>" type="text">
                                    <label class="labelmui">Nama Petugas</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="struktural" class="form-select" id="select">
                                        <option <?php echo ($data['getDetail']['data']['structural_officer'] == null ? 'selected' : '');?> value="">Pilih Strukturan</option>

                                        <?php foreach($data['getStructural'] as $row): ?>
                                            <option <?php echo ($data['getDetail']['data']['structural_officer'] == $row['name_structural'] ? 'selected' : '');?> value="<?php echo $row['name_structural'];?>"><?php echo $row['name_structural'];?></option> 
                                        <?php endforeach; ?>  
                                         
                                    </select>
                                    <!-- <label class="labelmui">Strukturan</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="nrp" value="<?php echo $data['getDetail']['data']['nrp_officer'];?>" type="text">
                                    <label class="labelmui">NRP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="pam" value="<?php echo $data['getDetail']['data']['pam_officer'];?>" type="text">
                                    <label class="labelmui">Dalam PAM</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select class="form-select" name="pangkat" id="select2">
                                        <option <?php echo ($data['getDetail']['data']['rank_officer'] == null ? 'selected' : '');?> value="">Pilih Pangkat</option>

                                        <?php foreach($data['getRank'] as $row): ?>
                                            <option <?php echo ($data['getDetail']['data']['rank_officer'] == $row['name_rankOfficer'] ? 'selected' : '');?> value="<?php echo $row['name_rankOfficer'];?>"><?php echo $row['name_rankOfficer'];?></option> 
                                        <?php endforeach; ?>  
                                         
                                    </select>
                                    <!-- <label class="labelmui">Pangkat </label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="noHp" value="<?php echo $data['getDetail']['data']['phone_officer'];?>" type="text">
                                    <label class="labelmui">Nomor Handphone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select class="form-select" name="status" id="select3">
                                        <option <?php echo ($data['getDetail']['data']['status_officer'] == null ? 'selected' : '');?> value="">Pilih Status</option>
                                        <option <?php echo ($data['getDetail']['data']['status_officer'] == '1' ? 'selected' : '');?> value="1">Active</option>
                                        <option <?php echo ($data['getDetail']['data']['status_officer'] == '0' ? 'selected' : '');?> value="0">Inactive</option>
                                    </select>
                                    <!-- <label class="labelmui">Status </label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('operasi/Petugas'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.dropify').dropify();

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
                url: "<?php echo base_url();?>operasi/Petugas/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>operasi/Petugas";
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
            url: "<?php echo base_url();?>operasi/Petugas/delete",
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
                        window.location.href = "<?php echo base_url();?>operasi/Petugas";
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
