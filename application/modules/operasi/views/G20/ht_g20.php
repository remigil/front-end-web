<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Ht</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card mt-3">
        <div class="card-body ">
            <form class="form row" method="post" enctype="multipart/form-data"> 
            <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                <div class="col-md-12 mb-3">  
                    <h3 style="text-align: center;">CEK LIST GIAT WAL PJR DITLANTAS <br>DAN WAL JAJARAN</h3>
                </div>
                <div class="col-md-6">
                    <div class="material-textfield">
                        <input required style="width: 100%;" name="no_lambung" placeholder="" type="text">
                        <label class="labelmui">Nomor Lambung</label>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="material-textfield">
                        <input required style="width: 100%;" name="identitas_rt" placeholder="" type="text">
                        <label class="labelmui">Identitas RT</label>
                    </div> 
                </div>


                <div class="col-md-6">
                    <div class="material-textfield">
                        <input required style="width: 100%;" name="dari_pukul" placeholder="" type="text">
                        <label class="labelmui">Dari Pukul</label>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="material-textfield">
                        <input required style="width: 100%;" name="tujuan_pukul" placeholder="" type="text">
                        <label class="labelmui">Tujuan Pukul</label>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="material-textfield">
                        <input required style="width: 100%;" name="jumlah_kendaraan" placeholder="" type="text">
                        <label class="labelmui">Jumlah Kendaraan</label>
                    </div> 
                </div>

                <div class="col-md-12">
                    <div class="material-textfield">
                        <label>Keterangan</label>
                        <textarea name="ket" class="form-control" cols="5" rows="5"></textarea>
                    </div>
                </div>
 
                <div class="col-md-12">
                    <div class="col-md-12  text-center">
                        <button class="btn btn-primary" style="width: 200px;" type="submit">Simpan</button>
                    </div>
                </div>
               
            
                <div class="col-md-12 mt-3">
                    <table id="datatable" class="table dt-responsive w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NOMOR LAMBUNG</th>
                                <th>IDENTITAS RT</th>
                                <th>DARI PUKUL</th>
                                <th>TUJUAN PUKUL</th>
                                <th>JUMLAH KENDARAAN YANG DIKAWAL</th>
                                <th>KET</th>
                                <th>TANGGAL</th>
                                <th></th>
                            </tr>
                        </thead> 
                    </table>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- End Page -->
 
 

<div class="modal fade EditHt" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Ht</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="formEdit row" method="post" enctype="multipart/form-data"> 
                <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                    <div class="col-md-12 mb-3">  
                        <h3 style="text-align: center;">EDIT <br>CEK LIST GIAT WAL PJR DITLANTAS <br>DAN WAL JAJARAN</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input hidden style="width: 100%;" name="id" placeholder="" type="text">
                            
                            <input style="width: 100%;" name="no_lambungEdit" placeholder="" type="text">
                            <label class="labelmui">Nomor Lambung</label>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="identitas_rtEdit" placeholder="" type="text">
                            <label class="labelmui">Identitas RT</label>
                        </div> 
                    </div>


                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="dari_pukulEdit" placeholder="" type="text">
                            <label class="labelmui">Dari Pukul</label>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="tujuan_pukulEdit" placeholder="" type="text">
                            <label class="labelmui">Tujuan Pukul</label>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="jumlah_kendaraanEdit" placeholder="" type="text">
                            <label class="labelmui">Jumlah Kendaraan</label>
                        </div> 
                    </div>

                    <div class="col-md-12">
                        <div class="material-textfield">
                            <label>Keterangan</label>
                            <textarea name="ketEdit" class="form-control" cols="5" rows="5"></textarea>
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="col-md-12  text-center">
                            <button class="btn btn-primary" style="width: 200px;" type="submit">Ubah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // var userDataTable;

    $(document).ready(function() { 

        $( '[name=jumlah_kendaraan]' ).mask('000000000');
        
        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            // scrollX: true,

            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            buttons: ["excel", "csv", "pdf"],

            lengthMenu: [
                [10, 25, 50, 9999],
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

                url: '<?php echo base_url();?>operasi/Ht/serverSideTable',

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
                { data: 'no_lambung'}, 
                { data: 'identitas_rt'}, 
                { data :'dari_pukul'}, 
                { data: 'tujuan_pukul'}, 
                { data: 'jumlah_kendaraan'},  
                { data: 'ket'},  
                { 
                    data: 'created_at', 
                    render: function ( data, type, row, meta ) {
                    return moment(data).format('DD MMM YYYY h:mm A');
                    }
                },  
                { data: 'action' , orderable : false } 
            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 
                client();
            }   

        }); 

        function client() {

            $('.EditHt').on('shown.bs.modal', function(event) {
                var modal          = $(this);
                
                modal.find('[name=id]').val($(event.relatedTarget).data("id"));
                modal.find('[name=no_lambungEdit]').val($(event.relatedTarget).data("no"));
                modal.find('[name=identitas_rtEdit]').val($(event.relatedTarget).data("identitas"));
                modal.find('[name=dari_pukulEdit]').val($(event.relatedTarget).data("dari"));
                modal.find('[name=tujuan_pukulEdit]').val($(event.relatedTarget).data("tujuan"));
                modal.find('[name=jumlah_kendaraanEdit]').val($(event.relatedTarget).data("jml"));
                modal.find('[name=ketEdit]').val($(event.relatedTarget).data("ket"));

                
            });

            $(".deletedata").on("click", function(event) {

                Swal.fire({

                    title: 'Anda yakin ingin menghapus ?',

                    text: "",

                    icon: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Yes'

                }).then((result) => {

                    if (result.value == true) {
                        $("#overlay").fadeIn(300);

                        $.ajax({
                            url: "<?php echo base_url(); ?>operasi/Ht/delete",
                            method: "POST",
                            data: {
                                "id": $(this).data("id"),
                            },
                            dataType: 'JSON',
                            // contentType: false,
                            // processData: false,  
                            success: function(data) {
                                $("#overlay").fadeOut(300);
                                if (data['status'] == true) {
                                    Swal.fire(
                                        `${data['message']}`,
                                        '',
                                        'success'
                                    ).then(function() {
                                        userDataTable.ajax.reload();
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

                    } else {

                        userDataTable.ajax.reload();


                    }

                });



            });
        }

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Ht/store",
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
                            $('.form')[0].reset();
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


        $(".formEdit").submit(function(e) {
            // $("#overlay").fadeIn(300);
            e.preventDefault(); 
            // alert('adaw');
            var formData = new FormData($('.formEdit')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>operasi/Ht/storeEdit",
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
                            $('.formEdit')[0].reset();
                            $(".EditHt").modal('hide');
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