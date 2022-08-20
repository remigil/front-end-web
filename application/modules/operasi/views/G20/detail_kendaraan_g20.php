<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold">Detail Kendaraan</li>
    </ol>
</nav>

<div class="page">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-4 fw-bold">DETAIL KENDARAAN</p>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo base_url()?>operasi/Kendaraan/Edit/<?php echo $data['getDetail']['data']['id'];?>"> <button type="button" class=" btn btn-primary waves-effect float-end" style="width: 25%;">Edit <i class="mdi mdi-square-edit-outline"></i></button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <p>NOMOR</p>
                            <p>JENIS</p>
                            <p>MEREK</p>
                            <p>KEPEMILIKAN</p>
                        </div>
                        <div class="col-1 text-black">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </div>
                        <div class="col-3 text-black">
                            <p><?php echo $data['getDetail']['data']['no_vehicle'];?></p>
                            <p><?php echo ($data['getDetail']['data']['type_vehicle'] == null ? '-' : $data['getDetail']['data']['type_vehicle']);?></p>
                            <p><?php echo ($data['getDetail']['data']['brand_vehicle'] == null ? '-' : $data['getDetail']['data']['brand_vehicle']);?></p>
                            <p><?php echo ($data['getDetail']['data']['ownership_vehicle'] == null ? '-' : $data['getDetail']['data']['ownership_vehicle']);?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <a href="<?= base_url('operasi/Kendaraan'); ?>"><button class="btn btn-sm btn-primary float-end" style="width: 40vh;">Kembali</button></a>
            </div>
        </div>
    </div>
</div>