<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Petugas Tracking</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page row"> 
    <div class="col-md-12"> 
        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive table-hover dataTable w-100">
                    <thead>
                        <tr>
                            <!-- <th>No</th> -->
                            <th>NRP User</th>
                            <!-- <th>Token FCM</th>
                            <th>Token Track</th>  -->
                            <th>Device User</th> 
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                </table>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->
 


<script>
    $(document).ready(function() {
        $('.dropify').dropify();

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

                url: '<?php echo base_url();?>operasi/PetugasTracking/serverSideTable',

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

                // { data: 'id'}, 
                { data: 'nrp_user'},
                // { data: 'token_fcm'}, 
                // { data: 'token_track'},
                { data: 'device_user'},      
                { data: 'action' , orderable : false }

            ],

            // order: [[ 0, "DESC" ]],

            drawCallback : function(settings){ 
                $("#overlay").fadeOut(300); 
                $(".hapus").on("click",function(event){
                    var id = $(this).data("id");
                    // console.log(id);
                    // e.preventDefault(); 
                    $.ajax({
                        url: "<?php echo base_url();?>operasi/PetugasTracking/delete",
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
            }   

        });   

        
        
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/PetugasTracking/store",
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
                            $(".TambahPetugasTracking").modal('hide');
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