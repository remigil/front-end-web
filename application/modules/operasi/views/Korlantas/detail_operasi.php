<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card">

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-3 fw-bold text-primary">Detail Operasi</p>
                </div>
                <div class="col-md-6 mt-2">
                <a href="<?php echo base_url()?>operasi/RencanaOperasi/Edit/<?php echo $data['getDetail']['data']['id'];?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button></a>
                
                    <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end me-4" style="width: 25%; letter-spacing:2px">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                   
                </div>
            </div>
            <hr style="height:5px;border-width:0;color:gray;background-color:gray">
            <div class="row">
                <div class="col-md-5">
                    <p class="fs-5 fw-bold text-primary">Identitas Operasi</p>
                    <table class="table table-borderless" style="width:90% ;">
                        <tr>
                            <td>Nama Operasi</td>
                            <td>:</td>
                            <td><?= $data['getDetail']['data']['name_operation'];?></td>
                        </tr>
                        <!-- <tr>
                            <td>Polda</td>
                            <td>:</td>
                            <td><?= $data['getDetail']['data']['polda']['name_polda'];?></td>
                        </tr> -->
                        <tr>
                            <td>Tanggal Pelakasaan</td>
                            <td>:</td>
                            <td><?= date('d/m/Y',strtotime($data['getDetail']['data']['date_start_operation']))?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Selesai</td>
                            <td>:</td>
                            <td><?= date('d/m/Y',strtotime($data['getDetail']['data']['date_end_operation']))?></td>
                        </tr>
                       
                    </table>
                </div>
                <div class="col-md-7" style="margin-left:-4vh ;">
                    <p class="fs-5 fw-bold text-primary">Aset Operasi</p>
                    <div class="row d-flex">
                        <div class="col-md-3">
                            <p class="fw-bold">Logo Operasi</p>
                            <img src=<?= base_url('assets/image-default.png'); ?> alt="" height="124px" width="124px" class="rounded">
                        </div>
                        <div class="col-md-4">
                            <p class="fw-bold">Background Operasi</p>
                            <img src=<?= base_url('assets/image-default.png'); ?> alt="" height="124px" width="170px" class="rounded">
                        </div>
                        <div class="col-md-4 ">
                            <p class="fw-bold">Banner Operasi</p>
                            <img src=<?= base_url('assets/image-default.png'); ?> alt="" height="124px" width="246px" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-5" style="height:5px;border-width:0;color:gray;background-color:gray">
            <div class="row">
                <div class="col-md-5 mt-4">
                    <p class="fs-4 fw-bold text-primary">List Akun Operasi</p>
                </div>
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>Polda</th>
                            <th>Polres</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jakbar</td>
                            <td>Polmetjakbar</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jaktim</td>
                            <td>Polmetjaktim</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jakut</td>
                            <td>Polmetjakut</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jaksel</td>
                            <td>Polmetjaksel</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Metro Jaya</td>
                            <td>Polres Metro Jakpus</td>
                            <td>Polmetjakpus</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polrestabes Bandung</td>
                            <td>PolmetBandung</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polres Bandung</td>
                            <td>PolmetBandung</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polresta Bogor</td>
                            <td>PolmetBogor</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                        <tr>
                            <td>Polda Jawa Barat</td>
                            <td>Polres Bogor</td>
                            <td>PolmetBogor</td>
                            <td>opskeselamatan2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 ">
                <a href="<?= base_url('operasi/RencanaOperasi'); ?>"><button class="btn btn-primary float-end" style="width:15%; letter-spacing:2px">Kembali</button></a>

            </div>
        </div>
    </div>
    <!-- End Page -->

   

    <script>
        $(document).ready(function() {
            $('.dropify').dropify();

            $('#datatable').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
            });
        });


        $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>operasi/RencanaOperasi/delete",
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



    </script>