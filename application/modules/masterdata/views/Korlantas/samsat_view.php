<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#">Data <?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <button type="button" class="btn btn-primary waves-effect mb-2" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Tambah Samsat</button>
    <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Samsat</th>
                        <th>Alamat</th>
                        <th>Jam Operasional</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>
<!-- End Page -->


<!-- ADD Modals -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Tambah Samsat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" placeholder="isi nama samsat">
                                <label for="nama_akun">Nama Samsat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" placeholder="isi alamat" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>
                            <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Modals -->
<div class="modal fade bs-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row m-3">
                    <div class="col-md-12">
                        <form action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_samsat" placeholder="isi nama samsat" name="nama_samsat">
                                <label for="nama_akun">Nama Samsat</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" style="height: 100px" name="nama_alamat" placeholder="isi alamat" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>
                            <div class="mt-1 mb-3 rounded" style="height: 22vh; ;" id="mapG20Dashboard"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" name="jb" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Buka</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="time" class="form-control" id="nama_akun" name="jt" placeholder="isi nama samsat">
                                        <label for="nama_akun">Jam Tutup</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

                url: '<?php echo base_url(); ?>masterdata/Samsat/serverSideTable',

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
                    data: 'polda_id'
                },
                {
                    data: 'name_polres'
                },
                {
                    data: 'code_satpas'
                },
                {
                    data: 'address'
                },
                {
                    data: 'latitude'
                },
                {
                    data: 'longitude'
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

        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>masterdata/Polres/store",
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
                            $(".TambahPolres").modal('hide');
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
    $('.detailRow').on('click', function() {
        $('#detailModal').modal('show')
        $('.modal-title').text('Detail Samsat')
        $('[name="nama_samsat"]').val($(this).data('samsat'))
        $('[name="nama_alamat"]').val($(this).data('alamat'))
        $('[name="jb"]').val($(this).data('jb'))
        $('[name="jt"]').val($(this).data('jt'))
        $('#submit_edit').hide()
    })

    $('.editRow').on('click', function() {
        $('.modal-title').text('Ubah Akun')
        $('#detailModal').modal('show')
        $('[name="nama_akun"]').val($(this).data('akun'))
        $('[name="password"]').val($(this).data('password'))
        $('[name="tingkat"]').val($(this).data('tingkat'))
        $('[name="akses"]').val($(this).data('akses'))
        $('#submit_edit').show()
    })

    function hapus() {
        Swal.fire({
            title: '',
            text: "Apakah anda ingin menghapus data ini ?",
            icon: 'question',
            iconColor: '#ED171D',
            showCancelButton: true,
            cancelButtonColor: '#003A91',
            confirmButtonColor: '#ED171D',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
</script>