<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Laporan Anev</li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">
    <a type="button" href="<?php base_url()?>laporan/Anev/Add" class="btn btn-primary waves-effect" >Tambah Laporan Anev</a>
    <div class="card mt-3">
        <div class="card-body">
            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Bahan Bakar</th>
                        <th>Merek</th>
                        <th>Kepemilikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
            </table>
        </div>

    </div>
</div>
<!-- End Page -->