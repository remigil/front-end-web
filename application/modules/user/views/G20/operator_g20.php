<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">operator</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".Tambahoperator">Tambah operator</button>
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Banner</th>
                            <th>Name Operation</th>
                            <th>Document Sprint</th>
                            <th>Background Image</th>
                            <th>Logo</th>
                            <th>Start Date to End Date</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                </table>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade Tambahoperator" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah operator</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form row" method="post" enctype="multipart/form-data">  
                    <div class="col-md-12"> 
                        <label class="labelmui">Banner</label>
                        <input type="file" name="banner" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                    </div> 
                    
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="name_operation" placeholder="" type="text">
                            <label class="labelmui">Nama Operation</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <label class="labelmui">Banner</label>
                            <input type="file" name="sprint" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <label class="labelmui">Banner</label>
                            <input type="file" name="bg" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="material-textfield mb-3">
                            <label class="labelmui">Banner</label>
                            <input type="file" name="logo" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url();?>assets/no_image.png"  /> 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="start_date" placeholder="" type="text">
                            <label class="labelmui">Start Date</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield mb-3">
                            <input style="width: 100%;" name="end_date" placeholder="" type="text">
                            <label class="labelmui">End Date</label>
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

                url: '<?php echo base_url();?>user/operator/serverSideTable',

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
                { data: 'banner'},
                { data: 'name_operation'},
                { data: 'document_sprint'}, 
                { data: 'background_image'},
                { data: 'logo'},  
                { data: 'date'},      
                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 

            }   

        });   
        
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>user/operator/store",
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
                            $(".Tambahoperator").modal('hide');
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