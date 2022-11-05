<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <!-- <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li> -->
        <li class="breadcrumb-item active fw-bold" aria-current="page">KTT G20 Bali</li>
    </ol>
</nav>
<!-- </div> --> 
<div class="page" >
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Petugas Pelapor</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Waktu</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>
        </div>

    </div>
</div>
<!-- End Page -->

 
<script>
 
    $(document).ready(function() {
        

        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            buttons: [   
                    {
                        extend:    'excel',
                        titleAttr:    'excel',
                        text:      '<i class="fadeIn animated bx bx-file"></i> ',
                        className: 'btn btn-success box-shadow--4dp btn-sm-menu',
                        messageTop: 'Agents Data',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6] 
                        }

                    },
                    // {
                    //     extend: 'pdfHtml5',
                    //     titleAttr: 'PDF',
                    //     extension: ".pdf",
                    //     orientation:'landscape', 
                    //     pageSize: 'A4',
                    //     text: '<i class="fadeIn animated bx bx-file-blank"></i> ',
                    //     className: 'btn btn-warning box-shadow--4dp btn-sm-menu', 
                    //     exportOptions: {
                    //         columns: [0, 1, 2, 3, 4, 5, 6] 
                    //     }, 
                         

                    // },
                    {
                        extend: 'print',
                        titleAttr: 'print',
                        orientation:'landscape',
                        text:      '<i class="fadeIn animated bx bx-printer"></i> ',
                        className: 'btn btn-danger box-shadow--4dp btn-sm-menu', 
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6] 
                        },
                        customize: function ( win ) {
                            // $(win.document.body)
                            //     .css( 'font-size', '10pt' )
                            //     .prepend(
                            //         '<div><img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;"  alt="logo"/></div>'
                            //     );

                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                        },



                    },
                    {
                        extend:    'colvis',
                        titleAttr:    'Filter Column',
                        text:      '<i class="fadeIn animated bx bx-filter"></i> ',
                        className: 'btn btn-dark box-shadow--4dp btn-sm-menu'
                    }
            ],

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

                url: '<?php echo base_url(); ?>laporan/operasi/serverSideTable',

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
                    data: 'foto', 
                    orderable: false
                },
                {
                    data: 'name_officer'
                },
                {
                    data: 'categori'
                },
                {
                    data: 'description'
                },
                {
                    data: 'time'
                },
                {
                    data: 'phone_officer'
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
                client();

            }


        });


        function client() {

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
                            url: "<?php echo base_url(); ?>laporan/Operasi/delete",
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
    });
 
</script>

 