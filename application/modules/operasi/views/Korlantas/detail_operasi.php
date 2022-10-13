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
                
                <div class="row">
                <div class="col-md-6">
                <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahAkun">Tambah Akun</button>
                </div>
                </div>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Polda</th>
                        <!-- <th>Phone Akun</th> -->
                        <!-- <th>Polres</th> -->
                        <th>Username</th>
                        <th>Password</th>
                        <!-- <th>No. Kendaraan</th> -->
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
            </div>
            <div class="col-md-12 ">
                <a href="<?= base_url('operasi/RencanaOperasi'); ?>"><button class="btn btn-primary float-end" style="width:15%; letter-spacing:2px">Kembali</button></a>

            </div>
        </div>
    </div>
    <!-- End Page -->
    <div class="modal fade TambahAkun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Akun</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-4">
                            <div class="material-selectfield">
                            <select name="polda_id" class="form-select" style="width:100%" id="polda" required>
                        <option selected value="">Pilih Polda</option>
                        <?php
                        foreach ($data['getPolda'] as $row) : ?>
                            <option value="<?php echo $row['id']; ?>">  <?php echo $row['name_polda']; ?></option>
                        <?php endforeach; ?>
                    </select>
                                <label  class="labelmui">Polda</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-textfield mb-3" style="margin:0 -0.18vh 0 -0.18vh">
                                <input style="width: 100%; " name="" type="text" required>
                                <label class="labelmui">Akun</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="material-textfield mb-3" style="margin:0 -0.18vh 0 -0.18vh">
                                <input style="width: 100%; " name="" type="password" required>
                                <label class="labelmui">Password</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="position-absolute top-50 start-50 translate-middle" style="margin:0 -0.18vh 0 -0.18vh">
                                <button class=" btn btn-success" type="button" id="addId" onclick="education_fields();"> + </button>
                            </div>
                        </div>
                    </div>
                   
                    <div id="education_fields"></div>
                    <div class="clear"></div>
                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-primary w-25 float-end">SIMPAN</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
   

    <script>

        var Polda;
        var PoldaOrigin;
        var PoldaBaru;

        let PoldaUntukSelectLain = [];
        let PoldaChoose = [];
        var room = 1;

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
    
    function getOption(no) {
        let select = $('#select' + no).find(":selected").val();
        let list = '';
        if (select == '') {
            list += ` <option selected value="">Pilih Polda</option>`
        } else {
            if (select) {
                for (let i = 0; i < PoldatuntukSelectLain.length; i++) {// const element = PetugasUntukSelectLain[i];
                    list += ` <option selected value=${PoldaUntukSelectLain[i].id}>${PoldaUntukSelectLain[i].name_polda}</option>` }
            }

        }
        for (let i = 0; i < Poldabaru.length; i++) {
            list += `<option value ="${Poldabaru[i]['id']}">${Poldabaru[i]['name_polda']}</option>`;
        }
        $('#select' + no).html(list);
    }



    function education_fields() {
        room++;
        check()
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML =
            '<div class="row" style="margin-top:-10px">' +
            '<div class="col-md-5">' +
            '<div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">' +
            '<select name="officers[]" class="form-select" style="width:100%" id="select' + room + '" onchange="getvalue(' + room + ')"  onclick="getOption(' + room + ')" required>' +
            ' <option selected value="">Pilih Petugas</option>' +
            '</select>' +
            '<label class="labelmui">Petugas</label>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-4">' +
            '<div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">' +
            '<select name="id_kendaraan[]" class="form-select" style="width:100%" required>' +
            '<option selected value="">Pilih No Kendaraan</option>' +
            '<?php foreach ($data['getVehicle'] as $row) : ?>' +
            '<option value="<?php echo $row['id']; ?>">' +
            '<?php echo $row['no_vehicle']; ?> </option>' +
            '<?php endforeach; ?>' +


            '</select>' +
            '<div class="col-md-1">' +
            '<div class="position-absolute top-50 start-50 translate-middle">' +
            '<button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> - </button>' +
            '</div>' +
            '</div>' +
            '<div class="clear"></div>';

        objTo.appendChild(divtest)
        list = ''
        list += `<option value ="">Pilih Polda</option>`
        for (let i = 0; i < Poldabaru.length; i++) {
            list += `<option value ="${Poldabaru[i]['id']}">${Poldabaru[i]['name_polda']}</option>`;
        }
        $('#select' + room).html(list);
        return room;
    }
    var totalId = [1];


    $('#addId').click(function() {
        totalId.push(room);
        return totalId;
    })

    function remove_education_fields(rid) {
        var myIndex = totalId.indexOf(rid);
        if (myIndex !== -1) {
            totalId.splice(myIndex, 1);
        }
        $('.removeclass' + rid).remove();
        return totalId;
    }




    function getvalue(id) {
        PoldaUntukSelectLain = Poldabaru.filter((polda) => polda.id == $('#select' + id).val())
        Poldabaru = Poldabaru.filter((polda) => polda.id != $('#select' + id).val())
        list = ''
        list += ` <option selected value=${PoldaUntukSelectLain[0].id}>${PoldaUntukSelectLain[0].name_polda}</option>`
        PoldaChoose.push(PoldaUntukSelectLain);
        return PoldaChoose
    }


    function check() {
        console.log({
            PoldaLama: Poldabaru.length,
            PoldaBaru: PoldaChoose.length,
            PoldaLain: PoldaUntukSelectLain.length
        })
    }


    </script>