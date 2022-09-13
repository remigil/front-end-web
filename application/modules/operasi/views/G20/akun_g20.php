<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Data Akun</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahAkun">Tambah Akun</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        <!-- <th>Phone Akun</th> -->
                        <!-- <th>Polres</th> -->
                        <th>Ketua TIM</th>
                        <th>Petugas</th>
                        <th>No. Kendaraan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
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
                        <div class="col-md-6">
                            <div class="material-textfield mb-3" style="margin:0 -0.18vh 0 -0.18vh">
                                <input style="width: 100%; " name="namaAkun" type="text" required>
                                <label class="labelmui">Akun</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="material-textfield mb-3" style="margin:0 -0.18vh 0 -0.18vh">
                                <input style="width: 100%; " name="password" type="password" required>
                                <label class="labelmui">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-2">
                            <p class="text-center fw-bold" style="font-family:'Open Sans';font-size: 13px;color:#2C3333; ">Ketua Tim</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:-20px">
                        <div class="col-md-5">
                            <div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">
                                <select name="officers[]" class="form-select" style="width:100%" id="select1" onchange="getvalue(1)" onclick="getOption(1)" required>
                                    <option selected value="">Pilih Petugas</option>
                                </select>
                                <label class="labelmui">Petugas</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="material-selectfield mb-3" style="margin:2vh -0.18vh 0 -0.18vh">
                                <select name="id_kendaraan[]" class="form-select" style="width:100%" id="kendaraan" required>
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
                                    <input style="height:20px; width:20px; margin-top:-1.2vh;" class="form-check-input" value="1" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
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
                        <button type="submit" class="btn btn-primary w-25 float-end">SIMPAN</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var Petugas = '<?php echo json_encode($data['getOfficer']) ?>'
    var PetugasOrigin = JSON.parse(Petugas)
    var Petugasbaru = JSON.parse(Petugas);
    let PetugasUntukSelectLain = []
    let PetugasChoose = [];




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
            '<input style="height:20px; width:20px; margin-top:-1.2vh;" class="form-check-input" type="radio" value="' + room + '" name="flexRadioDefault" id="flexRadioDefault1">' +
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
    $(document).ready(function() {
        // new Choices('#officers', {
        //     searchEnabled: true,
        //     removeItemButton: true,
        //     removeItems: true,
        //     itemSelectText: '',
        //     classNames: {
        //         containerOuter: 'choices select-choices',
        //     },
        // });

        var userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function(settings, json) {},

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>operasi/Akun/serverSideTable',

                data: function(data) {

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

                beforeSend: function(xhr, settings) {

                },

                "dataSrc": function(result) {

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [

                {
                    data: 'id'
                },
                {
                    data: 'name_account'
                },
                // {
                //     data: 'vip'
                // },
                // {
                //     data: 'phone_account'
                // },
                {
                    data: 'leader_team'
                },
                {
                    data: 'officers'
                },
                {
                    data: 'vehicle',
                    orderable: false
                },


                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "DESC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }

        });
 
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            console.log(formData);
            $.ajax({
                url: "<?php echo base_url(); ?>operasi/Akun/store",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function() {
                            $(".TambahAkun").modal('hide');
                            userDataTable.draw();
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    } 
                }
            });
        });
    });
 

</script>