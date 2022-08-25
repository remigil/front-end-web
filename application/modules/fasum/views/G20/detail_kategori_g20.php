<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Detail Data Fasilitas Umum</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL AKUN</p>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('fasum/KategoriFasum/Edit'); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button></a>
                    <!-- <a href="<?= base_url('operasi/Akun/Edit/' . $data['getDetail']['data']['id'] . ''); ?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button> -->
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <p>KATEGORI FASILITAS UMUM</p>
                            <p>JUMLAH</p>
                        </div>
                        <div class="col-md-1">
                            <p>:</p>
                            <p>:</p>
                        </div>
                        <div class="col-md-3">
                            <p>Rumah Sakit</p>
                            <p>14</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <a href="<?= base_url('fasum/ListFasum'); ?>" class=" btn btn-primary waves-effect float-end ms-4" style="width: 25%;">Kembali</a>
            </div>
        </div>
    </div>
</div>

<script>
</script>