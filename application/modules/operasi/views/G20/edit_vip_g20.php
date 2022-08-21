<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">VIP</li>
        <li class="breadcrumb-item">Detail VIP</li>
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
                        <p class="fs-4 fw-bold">EDIT VIP</p>
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
                                    <input style="width: 100%;" name="namaVIP" value="<?php echo $data['getDetail']['data']['name_vip'];?>" type="text">
                                    <label class="labelmui">VIP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="jabatan" class="form-select">
                                        <option <?php echo ($data['getDetail']['data']['position_vip'] == null ? 'selected' : '');?> value="">Pilih Jabatan</option>
                                        <option <?php echo ($data['getDetail']['data']['position_vip'] == 'Presiden' ? 'selected' : '');?> value="Presiden">Presiden</option>
                                        <option <?php echo ($data['getDetail']['data']['position_vip'] == 'Wakil Presiden' ? 'selected' : '');?> value="Wakil Presiden">Wakil Presiden</option>
                                        <option <?php echo ($data['getDetail']['data']['position_vip'] == 'Menteri Pertahanan' ? 'selected' : '');?> value="Menteri Pertahanan">Menteri Pertahanan</option> 
                                    </select>
                                    <label class="labelmui">Jabatan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-selectfield mb-3">
                                    <select name="asalNegara" class="form-select">
                                        <option <?php echo ($data['getDetail']['data']['country_arrival_vip'] == null ? 'selected' : '');?> value="">Pilih Negara Kedatangan</option>
                                        <option <?php echo ($data['getDetail']['data']['country_arrival_vip'] == "Rusia" ? 'selected' : '');?> value="Rusia">Rusia</option>
                                        <option <?php echo ($data['getDetail']['data']['country_arrival_vip'] == "Amerika Serikat" ? 'selected' : '');?> value="Amerika Serikat">Amerika Serikat</option>
                                        <option <?php echo ($data['getDetail']['data']['country_arrival_vip'] == "Indonesia" ? 'selected' : '');?> value="Indonesia">Indonesia</option>
                                    </select>
                                    <label class="labelmui">Negara Kedatangan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="material-textfield mb-3">
                                    <input style="width: 100%;" name="keterangan" value="<?php echo $data['getDetail']['data']['description_vip'];?>" type="text">
                                    <label class="labelmui">Keterangan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="<?= base_url('operasi/Vip'); ?>" class="btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</a>
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
                url: "<?php echo base_url();?>operasi/Vip/storeEdit",
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
                            window.location.href = "<?php echo base_url();?>operasi/Vip";
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
            url: "<?php echo base_url();?>operasi/Vip/delete",
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
                        window.location.href = "<?php echo base_url();?>operasi/Vip";
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