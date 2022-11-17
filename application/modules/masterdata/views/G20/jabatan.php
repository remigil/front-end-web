<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Jabatan</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".Tambahjabatan">Tambah Jabatan</button>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jabatan</th> 
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade Tambahjabatan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Jabatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" enctype="multipart/form-data"> 
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="name" placeholder="" type="text">
                        <label class="labelmui">Jabatan</label>
                    </div> 
                    <div class="material-selectfield mb-3">
                        <select class="form-select" name="status"> 
                            <option selected value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                        <label class="labelmui">Jenis</label>
                    </div> 
                     
                    <div class="col-md-6 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 


<script>
    $(document).ready(function() {
        // $('#datatable').DataTable();
        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

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

                url: '<?php echo base_url();?>masterdata/jabatan/serverSideTable',

                data: function(data){

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

                { data: 'name_position'},

                { data: 'status_position'},  

                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 
                client();

            }   

        }); 

        function client(){  

            $(".flag").on("change",function(event){

                var id = $(this).data("id");
                var name = $(this).data("name"); 
                var flag = $(this).data("status");  
 
                if(flag == 0){  

                    Swal.fire({

                    title: 'Aktifkan Status ?',

                    text: "",

                    type: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Yes'

                    }).then((result) => { 

                        if (result.value == true) {   

                            $("#overlay").fadeIn(300);
                            $.ajax({

                                type : "POST",

                                url : "<?php echo base_url();?>masterdata/jabatan/storeEdit",

                                data : {

                                    "id" : id,
                                    "name" : name,
                                    "status" : 1,  

                                },    

                                dataType: 'JSON', 

                                success : function(data){

                                    $("#overlay").fadeOut(300);
                                    if(data['status'] == true){
                                        Swal.fire(
                                        `${data['message']}`, 
                                        '',
                                        'success'
                                        ).then(function() {  
                                            userDataTable.ajax.reload(); 
                                        }); 
                                    }else{
                                        Swal.fire(
                                        `${data['message']}`, 
                                        '',
                                        'error'
                                        ).then(function() { 
                                            userDataTable.ajax.reload(); 
                                        });
                                    }  

                                }

                            });

                        }else{   

                            userDataTable.ajax.reload();

                            
                        }

                    });

                }else if(flag == 1){

                    Swal.fire({

                    title: 'Tidak Aktifkan Status ?',

                    text: "",

                    type: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Yes'

                    }).then((result) => { 

                        if (result.value == true) {   
                            $("#overlay").fadeIn(300);

                            $.ajax({

                                type : "POST",

                                url : "<?php echo base_url();?>masterdata/jabatan/storeEdit",

                                data : {

                                    "id" : id,
                                    "name" : name,
                                    "status" : 0,

                                },    

                                dataType: 'JSON', 

                                success : function(data){

                                    $("#overlay").fadeOut(300);
                                    if(data['status'] == true){
                                        Swal.fire(
                                        `${data['message']}`, 
                                        '',
                                        'success'
                                        ).then(function() {  
                                            userDataTable.ajax.reload(); 
                                        }); 
                                    }else{
                                        Swal.fire(
                                        `${data['message']}`, 
                                        '',
                                        'error'
                                        ).then(function() { 
                                            userDataTable.ajax.reload(); 
                                        });
                                    } 

                                }

                            });

                        }else{   

                            userDataTable.ajax.reload();  

                            
                        }

                    });

                }

            });
        }

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>masterdata/jabatan/store",
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
                            $(".Tambahjabatan").modal('hide');
                            userDataTable.draw();
                            // window.location.href = "<?php echo base_url();?>masterdata/jabatan";
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