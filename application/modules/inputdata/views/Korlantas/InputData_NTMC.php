<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item ">Input Data</li>
        <li class="breadcrumb-item active fw-bold" aria-current="page"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">

    <div class="card">

        <div class="card-body">
            <form action="" id="form-dataharian">
                <div class="col-md-12">
                    <div class="row d-flex">
                         
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_satker" id="jenis_satker">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">--Pilih jenis Satker--</option>
                                    <option value="1">Media Center NTMC On Air</option>
                                    <option value="2">Media Center NTMC Off Air</option>
                                    <option value="3">Dokumentasi (Monitoring)</option>
                                    <option value="4">Aktivitas NTMC Korlantas</option>
                                    <!-- <option value="5">Status CCTV Korlantas</option>
                                    <option value="6">Status CCTV Yang Terintegrasi</option> -->
                                </select>
                                <label class="labelmui">Satker</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <select name="jenis_laporan" id="jenis_laporan">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">-Pilih jenis laporan--</option>
                                </select>
                                <label class="labelmui">Jenis Laporan</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-textfield mb-3">
                                <input type="date" name="date" id="date" style="width:100% ;">

                                <label class="labelmui">Tanggal Input</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary" type="button" id="btn_pilih">Pilih</button>
                        </div>
                    </div>
                </div>

                <div class="isiRow">

                </div>
                <div class="col-md-12">
                    <button type="button" id="btn_submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 10%; letter-spacing: 2px;">SIMPAN</button>
                    <button type="button" class="btn btn-secondary waves-effect float-end mt-3 me-3" style="width: 10%; letter-spacing: 2px;">BATAL</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Page -->
 

<!-- <style>
    table {
        border: 1px solid black;
        overflow-x: scroll;
        overflow-y: scroll;
        position: sticky;
    }

    .card-body {
        overflow: auto;
        white-space: nowrap;
    }

    /* th {
        position: sticky;
        top: 0%;
        color: white;
        border: 1px solid black;
        padding: 10px;
    }

    .table-wrapper {
        max-height: 300px;
        overflow-x: scroll;
    } */
</style> -->