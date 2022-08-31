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
                        <th>Phone Akun</th>
                        <th>VIP</th>
                        <!-- <th>Polres</th> -->
                        <!-- <th>Ketua TIM</th> -->
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
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="namaAkun" placeholder="Nama Akun" type="text" required>
                        <label class="labelmui">Nama Akun</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="phone_account" placeholder="Phone Akun" type="text" required>
                        <label class="labelmui">Phone Akun</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="officers[]" id="officers" style="height: 200px" multiple required> 
                            <?php foreach ($data['getOfficer'] as $row) : ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name_officer']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="labelmui">Petugas</label>
                    </div> 
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="ketuaTeam" placeholder="Ketua Team" type="text" required>
                        <label class="labelmui">Ketua Team</label>
                    </div>
                    <div class="material-selectfield mb-3">
                        <select name="id_kendaraan" class="form-select" required>
                            <option selected value="">Pilih No Kendaraan</option>
                            <?php foreach ($data['getVehicle'] as $row) : ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['no_vehicle']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="labelmui">No Kendaraan</label>
                    </div>
                    <div class="material-textfield mb-3">
                        <input style="width: 100%;" name="password" placeholder="Password" type="password" required>
                        <label class="labelmui">Password</label>
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
        
        new Choices('#officers', {
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
                {
                    data: 'phone_account'
                },
                {
                    data: 'leader_team'
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