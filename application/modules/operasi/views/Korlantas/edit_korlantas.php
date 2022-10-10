<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="page">
    <div class="card">
        
        <div class="card-body">
            <div class="row">
            <div class="col-md-12 mb-3">
            <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 20%;">Simpan</button>
            <a href="<?php echo base_url()?>operasi/RencanaOperasi/Detail/<?php echo $data['getDetail']['data']['id'];?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 15%;">Kembali <i></i></button></a>
            </div>
            </div>
        <form class="form" method="post" enctype="multipart/form-data">
        <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
    <div class="row">
            
                            <div class="col-md-12">
                                <div class="material-textfield">
                                    <input style="width: 100%;" name="no_ts" value="<?php echo $data['getDetail']['data']['name_operation'];?>" type="text">
                                    <label for="" class="labelmui">Nama Operasi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input required style="width: 100%;" name="tanggal_pelaporan" id="datepicker" class="form-control" value="<?php echo substr($data['getDetail']['data']['date_start_operation'],0,10);?>" type="date" >
                                    <label for="" class="labelmui">Tanggal Mulai</label>
                            </div>    
                    </div>
                            <div class="col-md-6">
                                <div class="material-textfield">
                                    <input required style="width: 100%;" name="tanggal_pelaporan" id="datepicker" class="form-control" value="<?php echo substr($data['getDetail']['data']['date_end_operation'],0,10);?>" type="date" >
                                    <label for="" class="labelmui">Tanggal Selesai</label>
                            </div>    
                    </div>
                    <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Document Sprint</label>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Logo</label>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Background Image</label>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100%;" class="form-control">
                        <label for="" class="labelmui">Banner</label>
                    </div>
                    </div>

                
            
            </div>
            </form>
        </div>

    </div>
</div>
<!-- End Page -->


<script>

    $(document).ready(function() {
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/RencanaOperasi/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>operasi/RencanaOperasi";
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