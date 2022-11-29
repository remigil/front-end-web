<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item active fw-bold" aria-current="page"><a href="#"><?= $title; ?></a></li>
    </ol>
</nav>
<!-- </div> -->
<div class="page">

    <div class="card">
        <div class="card-body">
            <form action="" id="form-dataharian">
                <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <div class="col-md-12">
                    <div class="row d-flex">
                        <div class="col-md-2">
                            <div class="material-selectfield mb-3">
                                <select name="options_waktu" id="options_waktu">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="">--Pilih jenis waktu laporan--</option>
                                    <option value="1">Harian</option>
                                    <option value="2">Bulanan</option>
                                    <option value="3">Tahunan</option>
                                </select>
                                <label class="labelmui">Jenis waktu laporan</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <div class="material-textfield mb-3">
                                    <input type="date" name="start_date" id="start_date" style="width:100% ;">
                                    <label class="labelmui">Filter tanggal mulai</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <div class="material-textfield mb-3">
                                    <input type="date" name="end_date" id="end_date" style="width:100% ;">
                                    <label class="labelmui">Filter tanggal selesai</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <select name="polda_id" id="polda_id">
                                    <!-- <select name="" id=""  multiple required> -->
                                    <option value="0">--Semua Polda--</option>
                                    <?php foreach ($data['polda'] as $key) : ?>
                                        <option value="<?= $key['id'] ?>"><?= $key['name_polda'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label class="labelmui">Polda</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary" type="button" id="btn_pilih">Export</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Page -->

<script>
    $('#options_waktu').on('change', function() {
        let options_waktu = $('#options_waktu').val()
        if (options_waktu == 1) {
            $('#start_date').attr('type', 'date')
            $('#end_date').attr('type', 'date')
        } else if (options_waktu == 2) {
            $('#start_date').attr('type', 'month')
            $('#end_date').attr('type', 'month')
        } else if (options_waktu == 3) {
            $('#start_date').attr({
                type: "number",
                min: "2000",
                max: "2100",
                placehoder: 'YYYY'
            })
            $('#end_date').attr({
                type: "number",
                min: "2000",
                max: "2100",
                placehoder: 'YYYY'
            })
        }
    })
</script>