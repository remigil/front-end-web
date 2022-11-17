<section class="shadow-sm">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item"><a href="#"><?= $data['menu'] ?></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page"><?= $data['submenu'] ?></li>
        </ol>
    </nav>
</section>
<div class="row">
    <div class="col-md-12">
        <div class="mb-4">
            <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Tambah Akun</button>
        </div>
        <div class="card">
            <div class="table-responsive m-3">
                <table class="table table-striped mb-0" id="tb_akunk3i">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Akun</th>
                            <th>Tingkat</th>
                            <th>Level Akses</th>
                            <th>Tanggal Pembuatan Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Korlantas</td>
                            <td>Korlantas</td>
                            <td>Admin Pusat</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-akun="Korlantas" data-password="Korlantas123" data-tingkat="Korlantas" data-akses="Admin Pusat">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-akun="Korlantas" data-password="Korlantas123" data-tingkat="Korlantas" data-akses="Admin Pusat">
                                        <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" onclick="hapus()">
                                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Polda_Metrojaya</td>
                            <td>Polda</td>
                            <td>Admin Polda</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-akun="Polda_Metrojaya" data-password="polda_metro123" data-tingkat="Polda" data-akses="Admin Polda">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-akun="Polda_Metrojaya" data-password="polda_metro123" data-tingkat="Polda" data-akses="Admin Polda">
                                        <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" onclick="hapus()">
                                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Polres_Jakut</td>
                            <td>Polres</td>
                            <td>Admin Polres</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-akun="Polres_Jakut" data-password="Korlantas123" data-tingkat="Polres" data-akses="Admin Polres">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-password="Korlantas123" data-tingkat="Polres" data-akses="Admin Polres">
                                        <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" onclick="hapus()">
                                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>G20_2022</td>
                            <td>Operator</td>
                            <td>Operator</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-akun="G20_2022" data-password="Korlantas123" data-tingkat="Operator" data-akses="Operator">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-akun="G20_2022" data-password="Korlantas123" data-tingkat="Operator" data-akses="Operator">
                                        <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" onclick="hapus()">
                                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Ketupat_2022</td>
                            <td>Operator</td>
                            <td>Operator</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-akun="Ketupat_2022" data-password="Korlantas123" data-tingkat="Operator" data-akses="Operator">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" ata-akun="Ketupat_2022" data-password="Korlantas123" data-tingkat="Operator" data-akses="Operator">
                                        <h3 style="color:#67676D"><i class="mdi mdi-pencil"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" onclick="hapus()">
                                        <h3 style="color:#ED171D"><i class="mdi mdi-trash-can"></i></h3>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODALS -->
<!-- ADD Modals -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel" style="color:white">Buat Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-3">
                        <img src="<?= base_url('assets/image-default.png') ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-9">
                        <form action="">
                        <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama_akun" placeholder="Isi nama user">
                                <label for="nama_akun">Nama Akun</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Isi nama user">
                                <label for="password">Kata Sandi</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tingkat</label>
                                        <select class="form-select form-select-lg">
                                            <option>Pilih tingkat</option>
                                            <option>Korlantas</option>
                                            <option>Polda</option>
                                            <option>Polres</option>
                                            <option>Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Level akses</label>
                                        <select class="form-select form-select-lg">
                                            <option>Pilih level akses</option>
                                            <option>Admin Pusat</option>
                                            <option>Admin Polda</option>
                                            <option>Admin Polres</option>
                                            <option>Operator</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
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
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-3">
                        <img src="<?= base_url('assets/image-default.png') ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-9">
                        <form action="">
                        <input type="hidden" name="<?= $csrf_name;?>" value="<?= $csrf_token;?>" style="display: none">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama_akun" placeholder="Isi nama user">
                                <label for="nama_akun">Nama Akun</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Isi nama user">
                                <label for="password">Kata Sandi</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tingkat</label>
                                        <select class="form-select form-select-lg" name="tingkat">
                                            <option>Pilih tingkat</option>
                                            <option>Korlantas</option>
                                            <option>Polda</option>
                                            <option>Polres</option>
                                            <option>Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Level akses</label>
                                        <select class="form-select form-select-lg" name="akses">
                                            <option>Pilih level akses</option>
                                            <option>Admin Pusat</option>
                                            <option>Admin Polda</option>
                                            <option>Admin Polres</option>
                                            <option>Operator</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn  btn-primary float-end" id="submit_edit" type="submit">UBAH</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tb_akunk3i').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Semua']
            ]
        })
    });


    $('.detailRow').on('click', function() {
        $('#detailModal').modal('show')
        $('.modal-title').text('Detail Akun')
        $('[name="nama_akun"]').val($(this).data('akun'))
        $('[name="password"]').val($(this).data('password'))
        $('[name="tingkat"]').val($(this).data('tingkat'))
        $('[name="akses"]').val($(this).data('akses'))
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
