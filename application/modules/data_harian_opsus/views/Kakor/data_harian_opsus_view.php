<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="card-header card-headline">
    <div class="row align-items-center">
        <div class="col-md-6">
            <!-- <h2 class="text-white"><?= strtoupper($data['headline'])  ?></h2> -->
            <h2 style="color: white; text-align:center;">DAFTAR DATA HARIAN OPERASI KHUSUS</h2>
        </div>
    </div>
</div>

<div class="page mt-5">
    <div class="page mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <!-- <div style="width: 25%; float:right; border: 1px; margin-bottom: 10px">
                <input type="search" class="form-control light-table-filter" data-table="table-hower" placeholder="Search..." />
            </div> -->
                <table id="datatable" class="table dt-responsive w-100" style="width: 800px;
        margin: 0 auto;">
                    <thead>
                        <tr class="table-info">
                            <th>No</th>
                            <th>Nama Operasi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Laporan Harian</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        userDataTable = $('#datatable').DataTable({


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

                url: '<?php echo base_url(); ?>operasi/RencanaOperasi/serverSideTable',

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
                    data: 'name_operation'
                },
                {
                    data: 'date_start_operation'
                },
                {
                    data: 'date_end_operation'
                },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "ASC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });
    });
</script>