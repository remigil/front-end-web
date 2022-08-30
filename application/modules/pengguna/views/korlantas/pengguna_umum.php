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
                            <th>Email</th>
                            <th>No. Handpone</th>
                            <th>Tanggal Pembuatan Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jhon</td>
                            <td>Jhone1@gmail.com</td>
                            <td>081304921293</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-nik="3525015201880002" data-email="Jhone1@gmail.com" data-nama="Jhon" data-password="abdcde123" data-jk="Laki - Laki" data-tgl="2022-05-31" data-no="081304921293">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-nik="3525015201880002" data-email="Jhone1@gmail.com" data-nama="Jhon" data-password="abdcde123" data-jk="Laki - Laki" data-tgl="2022-05-31" data-no="081304921293">
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
                            <td>Humaira</td>
                            <td>Humahuma@gmail.com</td>
                            <td>081419412123</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-nik="3525015201880002" data-email="Humahuma@gmail.com" data-nama="Humaira" data-password="abdcde123" data-jk="Perempuan" data-tgl="2022-05-31" data-no="081419412123">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-nik="3525015201880002" data-email="Humahuma@gmail.com" data-nama="Humaira" data-password="abdcde123" data-jk="Perempuan" data-tgl="2022-05-31" data-no="081419412123">
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
                            <td>Delon</td>
                            <td>Deldel12@gmail.com</td>
                            <td>081242142134</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-nik="3525015201880002" data-email="Deldel12@gmail.com" data-nama="Delon" data-password="abdcde123" data-jk="Laki - Laki" data-tgl="2022-05-31" data-no="081242142134">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-nik="3525015201880002" data-email="Deldel12@gmail.com" data-nama="Delon" data-password="abdcde123" data-jk="Laki - Laki" data-tgl="2022-05-31" data-no="081242142134">
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
                            <td>Regi</td>
                            <td>Region@gmail.com</td>
                            <td>081234909865</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-nik="3525015201880002" data-email="Region@gmail.com" data-nama="Regi" data-password="abdcde123" data-jk="Laki - Laki" data-tgl="2022-05-31" data-no="081234909865">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-nik="3525015201880002" data-email="Region@gmail.com" data-nama="Regi" data-password="abdcde123" data-jk="Laki - Laki" data-tgl="2022-05-31" data-no="081234909865">
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
                            <td>Yuni</td>
                            <td>Yuniyuri@gmail.com</td>
                            <td>081234787536</td>
                            <td>2022-05-31</td>
                            <td>
                                <div class="d-flex flex-row justify-content-between">
                                    <button style="background-color:transparent ; border:none" class="detailRow" data-nik="3525015201880002" data-email="Yuniyuri@gmail.com" data-nama="Yuni" data-password="abdcde123" data-jk="Perempuan" data-tgl="2022-05-31" data-no="081234787536">
                                        <h3 style="color:#003A91"><i class="mdi mdi-eye"></i></h3>
                                    </button>
                                    <button style="background-color:transparent ; border:none" class="editRow" data-nik="3525015201880002" data-email="Yuniyuri@gmail.com" data-nama="Yuni" data-password="abdcde123" data-jk="Perempuan" data-tgl="2022-05-31" data-no="081234787536">
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
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nik" placeholder="Isi NIK">
                                <label for="nama_akun">NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Isi Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" placeholder="Isi Nama User">
                                <label for="email">Nama User</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" placeholder="Isi Kata Sandi">
                                <label for="email">Kata Sandi</label>
                            </div>
                            <div class="row">
                                <h6>Jenis Kelamin</h6>
                                <div class="col-3">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                        <label class="form-check-label" for="formRadios1">
                                            Laki - Laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                        <label class="form-check-label" for="formRadios1">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="example-date-input" class="form-label">Tanggal Lahir</label>
                                <input class="form-control form-control-lg" name="tanggal" type="date" id="example-date-input">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="no_hp" placeholder="Isi No. Handphone">
                                <label for="email">No. Handphone</label>
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
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nik" placeholder="Isi NIK">
                                <label for="nama_akun">NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Isi Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" placeholder="Isi Nama User">
                                <label for="email">Nama User</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="password" placeholder="Isi Kata Sandi">
                                <label for="email">Kata Sandi</label>
                            </div>
                            <div class="row">
                                <h6>Jenis Kelamin</h6>
                                <div class="col-5">
                                    <div class="form-check mb-3 lk">
                                        <input class="form-check-input" type="radio" name="lk" id="lk">
                                        <label class="form-check-label" for="lk">
                                            Laki - Laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check mb-3 pw">
                                        <input class="form-check-input" type="radio" name="pw" id="pw">
                                        <label class="form-check-label" for="pw">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="example-date-input" class="form-label">Tanggal Lahir</label>
                                <input class="form-control form-control-lg" name="tanggal" type="date" id="example-date-input">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="no_hp" placeholder="Isi No. Handphone">
                                <label for="email">No. Handphone</label>
                            </div>
                            <button class="btn  btn-primary float-end" type="submit">SIMPAN</button>
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
        $('[name="nama"]').val($(this).data('nama'))
        $('[name="password"]').val($(this).data('password'))
        $('[name="email"]').val($(this).data('email'))
        $('[name="nik"]').val($(this).data('nik'))
        $('[name="tanggal"]').val($(this).data('tgl'))
        $('[name="no_hp"]').val($(this).data('no'))

        let jk = $(this).data('jk')

        if (jk === 'Laki - Laki') {
            $('.pw').hide()
            $('.lk').show()
            $('[name="lk"]').attr('checked', true)
        } else if (jk === 'Perempuan') {
            $('.lk').hide()
            $('.pw').show()
            $('[name="pw"]').attr('checked', true)
        }

        $('#submit_edit').hide()
    })

    $('.editRow').on('click', function() {
        $('#detailModal').modal('show')
        $('.modal-title').text('Edit Akun')
        $('[name="nama"]').val($(this).data('nama'))
        $('[name="password"]').val($(this).data('password'))
        $('[name="email"]').val($(this).data('email'))
        $('[name="nik"]').val($(this).data('nik'))
        $('[name="tanggal"]').val($(this).data('tgl'))
        $('[name="no_hp"]').val($(this).data('no'))

        let jk = $(this).data('jk')

        if (jk === 'Laki - Laki') {
            $('[name="pw"]').attr('checked', false)
            $('[name="lk"]').attr('checked', true)
        } else if (jk === 'Perempuan') {
            $('[name="lk"]').attr('checked', false)
            $('[name="pw"]').attr('checked', true)
        }
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