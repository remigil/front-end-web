<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Detail Category Schedule</li>
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
                        <p class="fs-4 fw-bold">EDIT Category Schedule</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">  
                        <div class="row">
                            <div class="col-md-12">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="name" value="<?php echo $data['getDetail']['data']['name_category_schedule'];?>" type="text">
                                    <label class="labelmui">Name Category Schedule</label>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="material-textfield mb-3">
                                    <textarea style="width: 100%;" name="keterangan" rows="5" cols="5" placeholder="Keterangan" type="text"><?php echo $data['getDetail']['data']['description_category_schedule'];?></textarea>
                                    <!-- <label class="labelmui">Keterangan</label> -->
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="material-selectfield mb-3">
                                    <select class="form-select" name="status">
                                        <option <?php echo ($data['getDetail']['data']['status_category_schedule'] == null ? 'selected' : '');?> value="">Pilih Status</option>
                                        <option <?php echo ($data['getDetail']['data']['status_category_schedule'] == '1' ? 'selected' : '');?> value="1">Aktif</option>
                                        <option <?php echo ($data['getDetail']['data']['status_category_schedule'] == '0' ? 'selected' : '');?> value="0">Tidak Aktif</option>
                                    </select>
                                    <label class="labelmui">Status</label>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <a href="<?= base_url('masterdata/categorySchedule'); ?>" class="btn btn-sm btn-primary float-end w-25">Kembali</a>
                </div>
            </form> 
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>masterdata/categorySchedule/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>masterdata/categorySchedule";
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
            url: "<?php echo base_url();?>masterdata/categorySchedule/delete",
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
                        window.location.href = "<?php echo base_url();?>masterdata/categorySchedule";
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