<section class="shadow-sm">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item"><a href="#"><?= $data['menu'] ?></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page"><?= $data['submenu'] ?></li>
        </ol>
    </nav>
</section>
<div class="page">
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Akun</th>
                            <th>Email</th>
                            <th>No. Handphone</th>
                            <th>Tanggal Pembuatan Akun</th>
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- MODALS -->
<!-- Detail Modals -->
<div class="modal fade DetailPenggunaUmum" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Detail Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				<form action="" class="form">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-3">
                        <input type="file" name="photo" id="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <div class="col-md-9">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="Isi NIK">
                                <label for="">NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Isi Email">
                                <label for="">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namaPenggunaUmum" name="namaPenggunaUmum" placeholder="Isi Nama User">
                                <label for="">Nama User</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" placeholder="Isi kebangsaan">
                                <label for="">Kebangsaan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noHp" name="noHp" placeholder="Isi No. Handphone">
                                <label for="">No. Handphone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noSim" name="noSim" placeholder="Isi No. Handphone">
                                <label for="">No. SIM</label>
                            </div>
						</div>
					</div>
				</form>
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

                url: '<?php echo base_url(); ?>pengguna/AkunMasyarakat/serverSideTable',

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
                    data: 'person_name'
                },
                {
                    data: 'email'
                },
                {
                    data: 'no_hp'
                },
                {
                    data: 'created_at'
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
	function detail(id) {
		$.ajax({
			url: '<?= base_url() ?>pengguna/AkunMasyarakat/detailPenggunaUmum/',
			type: 'POST',
			data: {
				id_pengguna_umum: id
			},
			dataType: 'JSON',
			success: function(results) {
				$('.DetailPenggunaUmum,input').attr('readonly', true)
				$('.DetailPenggunaUmum,#nik').val(results.nik)
				$('.DetailPenggunaUmum,#email').val(results.email)
				$('.DetailPenggunaUmum,#namaPenggunaUmum').val(results.person_name)
				$('.DetailPenggunaUmum,#kebangsaan').val(results.nationality)
				$('.DetailPenggunaUmum,#noHp').val(results.no_hp)
				$('.DetailPenggunaUmum,#noSim').val(results.no_sim)
			}
		})
	}
</script>
