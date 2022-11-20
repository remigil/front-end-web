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
                    <p class="fs-3 fw-bold text-primary text-uppercase">Detail Operasi</p>
                </div>
                <div class="col-md-6 mt-2">
                    <a href="<?php echo base_url() ?>operasi/RencanaOperasi/Edit/<?php echo $data['getDetail']['data']['id']; ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button></a>

                    <a href="javascript(0);" id="delete" data-id="<?php echo $data['getDetail']['data']['id']; ?>" class=" btn btn-danger waves-effect float-end me-4" style="width: 25%; letter-spacing:2px">Hapus<i class="mdi mdi-trash-can-outline"></i></a>

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
                            <td><?= $data['getDetail']['data']['name_operation']; ?></td>
                        </tr>
                        <!-- <tr>
                            <td>Polda</td>
                            <td>:</td>
                            <td><?= $data['getDetail']['data']['polda']['name_polda']; ?></td>
                        </tr> -->
                        <tr>
                            <td>Tanggal Pelakasaan</td>
                            <td>:</td>
                            <td><?= date('d/m/Y', strtotime($data['getDetail']['data']['date_start_operation'])) ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Selesai</td>
                            <td>:</td>
                            <td><?= date('d/m/Y', strtotime($data['getDetail']['data']['date_end_operation'])) ?></td>
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
                    <p class="fs-4 fw-bold text-primary text-uppercase">Daftar Polda yang Terlibat </p>
                </div>

                <!-- <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahAkun">Tambah Akun</button>
                    </div>
                </div> -->
                <div class="card mt-3">
                    <div class="card-body">
                        <table id="datatable" class="table dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Polda</th>
                                    <!-- <th>Phone Akun</th> -->
                                    <!-- <th>Polres</th> -->
                                    <!-- <th>Username</th>
                                    <th>Password</th> -->
                                    <!-- <th>No. Kendaraan</th> -->
                                    <!-- <th>Aksi</th> -->
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
<!-- <div class="modal fade TambahAkun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                        <option value="<?php echo $row['id']; ?>"> <?php echo $row['name_polda']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">Polda</label>
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
</div> -->


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

                url: '<?php echo base_url(); ?>operasi/RencanaOperasi/serverSideTablePolda',

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
                    data.id = '<?= $data['getDetail']['data']['id'] ?>';

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
                    data: 'name_polda'
                },
                // {
                //     data: 'date_start_operation'
                // },
                // {
                //     data: 'date_end_operation'
                // },
                // {
                //     data: 'action',
                //     orderable: false
                // }
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