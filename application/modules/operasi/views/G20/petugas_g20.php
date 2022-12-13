<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Petugas</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahPetugas">Tambah Petugas</button>
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select name="filterPolda" id="filterPolda" class="form-select" aria-label="Floating label select" style="width:100%" required> 
                        
                            <option selected value="">Pilih Polda</option>
                            <?php foreach($data['getPolda'] as $row): ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['name_polda'];?></option> 
                            <?php endforeach; ?> 
                        </select>
                        <!-- <label for="filterPolda">Kategori Peraturan</label> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="datatable" class="table dt-responsive w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Petugas</th>
                                <th>Polda</th>
                                <th>Pangkat</th>
                                <th>NRP</th>
                                <th>NRP Pengganti</th>
                                <th style="width:20% ;">Struktural</th>
                                <th>Dalam PAM</th>
                                <th>No. Handphone</th>
                                <?php if($this->uri->segment(3) == 'status'){?>
                                    <th>Status Download</th>
                                    <th>Status Login</th>
                                <?php } ?>
                                <th>Aksi</th>
                            </tr>
                        </thead> 
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahPetugas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Petugas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form row" method="post" enctype="multipart/form-data"> 
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"> 
                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                    </div>
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="namapetugas" placeholder="" type="text">
                            <label class="labelmui">Nama Petugas</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="nrp" placeholder="" type="text">
                            <label class="labelmui">NRP</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="replacementNrp_officer" placeholder="" type="text">
                            <label class="labelmui">NRP Pengganti</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-selectfield mb-3">
                            <select name="pangkat" class="form-select" id="select">
                                <option selected value="">Pangkat</option>

                                <?php foreach($data['getRank'] as $row): ?>
                                    <option value="<?php echo $row['name_rankOfficer'];?>"><?php echo $row['name_rankOfficer'];?></option> 
                                <?php endforeach; ?>  
                            </select>
                            <!-- <label class="labelmui">Pangkat</label> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-selectfield mb-3">
                            <select name="struktural" class="form-select" id="select2">
                                <option selected value="">Struktural</option>

                                <?php foreach($data['getStructural'] as $row): ?>
                                    <option value="<?php echo $row['name_structural'];?>"><?php echo $row['name_structural'];?></option> 
                                <?php endforeach; ?>   

                            </select>
                            <!-- <label class="labelmui">Struktural</label> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="pam" placeholder="" type="text">
                            <label class="labelmui">Dalam PAM</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="noHp" placeholder="" type="text">
                            <label class="labelmui">No. Handphone</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-selectfield mb-3">
                            <select name="status" class="form-select">
                                <option >Pilih Status</option>
                                <option selected value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                            <label class="labelmui">Status</label>
                        </div>
                    </div>
                    <div class="col-md-12 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
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

        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            scrollX: true,

            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            buttons: ["excel", "csv", "pdf"],

            lengthMenu: [
                [10, 25, 50, 999999],
                [10, 25, 50, 'All'],
            ],

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

                url: '<?php echo base_url();?>operasi/Petugas/serverSideTable',

                data: function(data){

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    data.filterPolda = $('[name=filterPolda]').val();

                    // data.filterPocName = $('[name=group_poc_name]').val();

                    // data.filterPhone = $('[name=poc_phone]').val();

                    <?php if($this->uri->segment(3) == 'status'){?>
                        data.filterStatusLog = 1;
                    <?php }else{ ?>  
                        data.filterStatusLog = 0;
                    <?php } ?>


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
                { data: 'name_officer'},
                { data: 'polda_id', orderable : false},  
                { data: 'rank_officer'},
                { data: 'nrp_officer'}, 
                { data: 'replacementNrp_officer'}, 
                { data: 'structural_officer'},  
                { data: 'pam_officer'},  
                { data: 'phone_officer'},   
                // { data: 'status_officer'},   

                <?php if($this->uri->segment(3) == 'status'){?>
                    { data: 'status_petugasdownload', orderable : false},   
                    { data: 'status_login', orderable : false},     
                <?php } ?>
                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 

            }   

        });   

        $("#filterPolda").on('change', function(e) {
            // alert(this.value);
            userDataTable.draw();
        });

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Petugas/store",
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
                            $(".TambahPetugas").modal('hide');
                            userDataTable.draw(); 
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