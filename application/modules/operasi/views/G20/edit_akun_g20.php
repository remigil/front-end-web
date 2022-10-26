<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item">Akun</li>
        <li class="breadcrumb-item">Detail Akun</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Edit</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" enctype="multipart/form-data">
                <input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p class="fs-4 fw-bold">EDIT AKUN</p>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Simpan</button>
                        <a href="javascript:void(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id'];?>" class=" btn btn-danger waves-effect float-end" style="width: 25%;">Hapus<i class="mdi mdi-trash-can-outline"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="material-textfield mb-3" style="margin:0 -0.18vh 0 -0.18vh">
                            <input style="width: 100%; " name="namaAkun" value="<?php echo $data['getDetail']['data']['name_account'];?>" type="text" required>
                            <label class="labelmui">Akun</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield mb-3" style="margin:0 -0.18vh 0 -0.18vh">
                            <input hidden type="text" name="oldPassword" value="<?php echo $data['getDetail']['data']['password'];?>">
                            <input style="width: 100%; " name="password" value="<?php echo $data['getDetail']['data']['password'];?>" type="text" required>
                            <label class="labelmui">Password</label>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-floating">
                            <select name="id_country" class="form-select" aria-label="Floating label select" style="width:100%" id="select">
                                <option selected value="">Pilih Negara Delegasi</option>
                                <?php foreach ($data['getCountry'] as $row) : ?>
                                    <option 
                                    <?php if($data['getDetail']['data']['id_country'] != null){?> 
                                        <?php echo ($row['name_country'] == $data['getDetail']['data']['country']['name_country'] ? 'selected' : '')?>
                                    <?php }?>
                                    value="<?php echo $row['id']; ?>"><?php echo $row['name_country']; ?></option>
                                <?php endforeach; ?> 

                                 
                            </select>
                            <label for=""></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-2">
                        <p class="text-center fw-bold" style="font-family:'Open Sans';font-size: 13px;color:#2C3333; ">Ketua Tim</p>
                    </div>
                </div>

                <?php $no = 1; foreach ($data['getDetail']['data']['officers'] as $row) : ?> 
                    <!-- <input type="text" name="account_officer[]" value="<?php echo $rows['name_officer']; ?>"> -->
                    <div class="row" style="margin-top:-20px">
                        <div class="col-md-5">
                            <div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">
                                <select name="officers[]" class="form-select" style="width:100%" id="select<?= $no?>" onchange="getvalue(<?= $no?>)" onclick="getOption(<?= $no?>)" required>
                                    <option selected value="">Pilih Petugas</option>
                                    <?php foreach ($data['getOfficer'] as $rows) : ?>
                                        <option 
                                            <?php echo ($row['name_officer'] == $rows['name_officer'] ? 'selected' : '');?>  
                                            value="<?php echo $rows['id']; ?>"><?php echo $rows['name_officer']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">Petugas</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">
                                <select name="id_kendaraan[]" class="form-select" style="width:100%" id="kendaraan" required>
                                    <option selected value="">Pilih No Kendaraan</option>
                                    <?php foreach ($data['getVehicle'] as $rows) : ?> 
                                        <option 
                                            <?php foreach ($data['getDetail']['data']['vehicles'] as $rowSelect) : ?>
                                                <?php echo ($rowSelect['no_vehicle'] == $rows['no_vehicle'] ? 'selected' : '');?>  
                                            <?php endforeach; ?>
                                            value="<?php echo $rows['id']; ?>"><?php echo $rows['no_vehicle']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">No Kendaraan</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="form-check"> 
                                    <input style="height:20px; width:20px; margin-top:-1.2vh;" class="form-check-input" value="<?= $no ?>" type="radio" name="flexRadioDefault" id="flexRadioDefault<?= $no ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="position-absolute top-50 start-50 translate-middle" style="margin:0 -0.18vh 0 -0.18vh">
                                <button class=" btn btn-danger" type="button" id="deleteId" onclick="deletePetugas('<?= $row['id']?>');"> - </button>
                            </div>
                        </div>
                    </div>
                    <?php $no++?>
                <?php endforeach; ?>

                <div class="row" style="margin-top:-20px">
                    <div class="col-md-5">
                        <div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">
                            <select name="officers[]" class="form-select" style="width:100%" id="select<?= count($data['getDetail']['data']['officers']) + 1;?>" onchange="getvalue(<?= count($data['getDetail']['data']['officers']) + 1;?>)" onclick="getOption(<?= count($data['getDetail']['data']['officers']) + 1;?>)">
                                <option selected value="">Pilih Petugas</option>
                            </select>
                            <label class="labelmui">Petugas</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">
                            <select name="id_kendaraan[]" class="form-select" style="width:100%" id="kendaraan" >
                                <option selected value="">Pilih No Kendaraan</option>
                                <?php foreach ($data['getVehicle'] as $row) : ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['no_vehicle']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label class="labelmui">No Kendaraan</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="form-check">
                                <input style="height:20px; width:20px; margin-top:-1.2vh;" class="form-check-input" value="<?= count($data['getDetail']['data']['officers']) + 1;?>" type="radio" name="flexRadioDefault" id="flexRadioDefault<?= count($data['getDetail']['data']['officers']) + 1;?>">
                            </div>
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
                    <a href="<?= base_url()?>operasi/akun/Detail/<?php echo $data['getDetail']['data']['id'];?>" class="btn btn-primary w-25 float-end">Kembali</a>
                </div>

            </form>
        </div>
    </div>
</div>

 

<script>
    var Petugas; 
    var PetugasOrigin;
    var Petugasbaru;
    // var Petugas = '<?php echo json_encode($data['getOfficer']) ?>'
    // var PetugasOrigin = JSON.parse(Petugas);
    // var Petugasbaru = JSON.parse(Petugas);
    let PetugasUntukSelectLain = []
    let PetugasChoose = [];
    
    
    // EDIIT
    var dataGetId;
    var parseGet;
    
    


    $(document).ready(function() {
        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>operasi/Akun/GetPetugasList", 
            data : {
                "search" : null, 
            }, 
            dataType : "JSON",
            success : function(result){ 
                // console.log(result);
                Petugas = result;
                PetugasOrigin = result;
                Petugasbaru = result;
            }
        });

        $.ajax({
            type : "POST",
            url : "<?php echo base_url();?>operasi/Akun/GetPetugasId", 
            data : {
                "id" : $("[name=id]").val(), 
            }, 
            dataType : "JSON",
            success : function(result){ 
                console.log(result);
                parseGet = result; 
                for (let i = 0; i < parseGet['officers'].length; i++) { 
                    console.log({a:parseGet['officer']['name_officer'] , b:parseGet['officers'][i]['name_officer']});
                    if(parseGet['officer']['name_officer'] == parseGet['officers'][i]['name_officer']){
                        $(`#flexRadioDefault${i+1}`).prop('checked',true);
                    }
                }
            }
        });
        
        new Choices('#officers', {
            searchEnabled: true,
            removeItemButton: true,
            removeItems: true,
            itemSelectText: '',
            classNames: {
                containerOuter: 'choices select-choices',
            },
        });

    });

    
    
     

    function deletePetugas(idOffice){
        console.log({a:parseGet['id'],b:idOffice});
        // e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>operasi/Akun/deleteAccountPetugas",
            method: "POST",
            data: {
                "account_id": parseGet['id'],
                "officer_id":idOffice,
            },
            dataType: 'JSON',
            // contentType: false,
            // processData: false,  
            success: function (data) {
                $("#overlay").fadeIn(300);
                if(data['status'] == true){
                    Swal.fire(
                        `${data['message']}`, 
                        '',
                        'success'
                        ).then(function() {  
                            window.location.href = `<?php echo base_url();?>operasi/Akun/Edit/${parseGet['id']}`;
                    }); 

                    $("#overlay").fadeOut(300);
                }else{
                    Swal.fire(
                        `${data['message']}`, 
                        '',
                        'error'
                        ).then(function() { 
                    });

                    $("#overlay").fadeOut(300);
                } 
            }
        }); 
    }


    var room = 1;

    function getOption(no) {
        let select = $('#select' + no).find(":selected").val();
        let list = '';
        if (select == '') {
            list += ` <option selected value="">Pilih Petugas</option>`
        } else {
            if (select) {
                for (let i = 0; i < PetugasUntukSelectLain.length; i++) {
                    // const element = PetugasUntukSelectLain[i];
                    list += ` <option selected value=${PetugasUntukSelectLain[i].id}>${PetugasUntukSelectLain[i].name_officer}</option>`
                }
            }

        }
        for (let i = 0; i < Petugasbaru.length; i++) {
            list += `<option value ="${Petugasbaru[i]['id']}">${Petugasbaru[i]['name_officer']}</option>`;
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
            '<label class="labelmui">No Kendaraan</label>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-2">' +
            '<div class="position-absolute top-50 start-50 translate-middle">' +
            '<div class="form-check">' +
            '<input style="height:20px; width:20px; margin-top:-1.2vh;" class="form-check-input" type="radio" value="' + room + '" name="flexRadioDefault" id="flexRadioDefault' + room + '">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-1">' +
            '<div class="position-absolute top-50 start-50 translate-middle">' +
            '<button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> - </button>' +
            '</div>' +
            '</div>' +
            '<div class="clear"></div>';

        objTo.appendChild(divtest)
        list = ''
        list += `<option value ="">Pilih Petugas</option>`
        for (let i = 0; i < Petugasbaru.length; i++) {
            list += `<option value ="${Petugasbaru[i]['id']}">${Petugasbaru[i]['name_officer']}</option>`;
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
        PetugasUntukSelectLain = Petugasbaru.filter((petugas) => petugas.id == $('#select' + id).val())
        Petugasbaru = Petugasbaru.filter((petugas) => petugas.id != $('#select' + id).val())
        list = ''
        list += ` <option selected value=${PetugasUntukSelectLain[0].id}>${PetugasUntukSelectLain[0].name_officer}</option>`
        PetugasChoose.push(PetugasUntukSelectLain);
        return PetugasChoose
    }


    function check() {
        console.log({
            petugasLama: Petugasbaru.length,
            petugasBaru: PetugasChoose.length,
            petugasLain: PetugasUntukSelectLain.length
        })
    }
    
    $(".form").submit(function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault(); 
        var formData = new FormData($('.form')[0]); 
        $.ajax({
            url: "<?php echo base_url();?>operasi/Akun/storeEdit",
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
                        window.location.href = "<?php echo base_url();?>operasi/Akun";
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
    $("#delete").on('click', function(e) {
        $("#overlay").fadeIn(300);
        e.preventDefault();  
        $.ajax({
            url: "<?php echo base_url();?>operasi/Akun/delete",
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
                        window.location.href = "<?php echo base_url();?>operasi/Akun";
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