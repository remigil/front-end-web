<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Panic Button</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas Pelapor</th>
                        <th>Kategori Laporan</th>
                        <th>Deskripsi</th>
                        <th>Waktu Insiden</th>
                        <th>No. Telepon</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hendri</td>
                        <td>Kecelakaan</td>
                        <td>-</td>
                        <td>01 Juli 2022 07:06</td>
                        <td class="text-primary">+62 895 1234 564</td>
                        <td class="text-center ms-auto">
                            <div class="rounded-circle m-auto" style="background:red; height:20px ; width:20px"></div>
                        </td>
                        <td>
                            <a href="<?= base_url('laporan/panic/Detail'); ?>"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Putu</td>
                        <td>Kemacetan</td>
                        <td>-</td>
                        <td>01 Juli 2022 07:06</td>
                        <td class="text-primary">+62 895 1234 564</td>
                        <td class="text-center ms-auto">
                            <div class="rounded-circle m-auto" style="background:green; height:20px ; width:20px"></div>
                        </td>
                        <td>
                            <a href="<?= base_url('laporan/panic/Detail'); ?>"><button class="btn btn-sm btn-primary"><i class="mdi mdi-cog "></i></button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahKegiatan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Kegiatan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="NoKegiatan" placeholder="" type="text">
                            <label class="labelmui">Kegiatan</label>
                        </div>
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="JenisKegiatan" placeholder="" type="text">
                            <label class="labelmui">VIP</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="NoKegiatan" placeholder="" type="text">
                            <label class="labelmui">Tim yang ditugaskan</label>
                        </div>
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="JenisKegiatan" placeholder="" type="date">
                            <label class="labelmui">Tanggal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="NoKegiatan" placeholder="" type="time">
                            <label class="labelmui">Waktu Mulai</label>
                        </div>
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="JenisKegiatan" placeholder="" type="time">
                            <label class="labelmui">Waktu Akhir</label>
                        </div>
                        <div class="material-textfield mb-3 col-6">
                            <input style="width: 100%;" name="JenisKegiatan" placeholder="" type="text">
                            <label class="labelmui">Lokasi Tujuan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <div style="height: 25vh;" class="mt-3 rounded" id="mapG20Dashboard"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 float-end">
                        <button class="btn btn-primary float-end" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            scrollX: true,
        });
    });
</script>