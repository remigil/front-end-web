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
                                    <option value="0">--Pilih jenis waktu laporan--</option>
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


            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-harian-tab" data-toggle="pill" data-target="#pills-harian" type="button" role="tab" aria-controls="pills-harian" aria-selected="true">Harian</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-bulanan-tab" data-toggle="pill" data-target="#pills-bulanan" type="button" role="tab" aria-controls="pills-bulanan" aria-selected="false">Bulanan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-tahunan-tab" data-toggle="pill" data-target="#pills-tahunan" type="button" role="tab" aria-controls="pills-tahunan" aria-selected="false">Tahunan</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-harian" role="tabpanel" aria-labelledby="pills-harian-tab">
                            <h4>Laporan harian</h4>
                            <table id="datatable" class="table dt-responsive" style="width: 60%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($data['laporanToday'] as $key) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $key['judul'] ?></td>
                                            <td><?= $key['date'] ?></td>
                                            <td><a href="<?= ApiUrl() . $key['url'] ?>" class="btn btn-primary" download>Download laporan</a></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-bulanan" role="tabpanel" aria-labelledby="pills-bulanan-tab">
                            <h4>Laporan Bulanan</h4>
                            <table id="datatable" class="table dt-responsive" style="width: 60%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $j = 1 ?>
                                    <?php foreach ($data['laporanMonth'] as $key) : ?>
                                        <tr>
                                            <td><?= $j ?></td>
                                            <td><?= $key['judul'] ?></td>
                                            <td><?= $key['date'] ?></td>
                                            <td><a href="<?= ApiUrl() . $key['url'] ?>" class="btn btn-primary" download>Download laporan</a></td>
                                        </tr>
                                        <?php $j++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-tahunan" role="tabpanel" aria-labelledby="pills-tahunan-tab">
                            <h4>Laporan Tahunan</h4>
                            <table id="datatable" class="table dt-responsive" style="width: 60%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $k = 1 ?>
                                    <?php foreach ($data['laporanYear'] as $key) : ?>
                                        <tr>
                                            <td><?= $k ?></td>
                                            <td><?= $key['judul'] ?></td>
                                            <td><?= $key['date'] ?></td>
                                            <td><a href="<?= ApiUrl() . $key['url'] ?>" class="btn btn-primary" download>Download laporan</a></td>
                                        </tr>
                                        <?php $k++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

    $('#btn_pilih').on('click', function(e) {
        let options_waktu = $('#options_waktu').val()
        if (options_waktu == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Jenis waktu laporan harus dipilih',
            })
        } else {
            var dates = new Date();

            let date = ''
            let polda_id = $('#polda_id').val()
            let filter = true
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()


            if (options_waktu == 1) {
                if (start_date == '' && end_date == '') {
                    filter = ''
                    date = new Date().toLocaleDateString('en-GB').split('/').reverse().join('-')
                }
            } else if (options_waktu == 2) {
                if (start_date == '' && end_date == '') {
                    filter = true
                    start_date = new Date(dates.getFullYear(), dates.getMonth(), 1).toLocaleDateString("en-GB").split('/').reverse().join('-');
                    end_date = new Date(dates.getFullYear(), dates.getMonth() + 1, 0).toLocaleDateString("en-GB").split('/').reverse().join('-');
                } else {
                    filter = true
                    start_date = moment(start_date).startOf("month").format("YYYY-MM-DD")
                    end_date = moment(end_date).endOf("month").format("YYYY-MM-DD");
                }
            } else if (options_waktu == 3) {
                if (start_date == '' && end_date == '') {
                    filter = true
                    start_date = moment().startOf("years").format("YYYY-MM-DD");
                    end_date = moment().endOf("years").format("YYYY-MM-DD");
                } else {
                    filter = true
                    start_date = moment(start_date).startOf("years").format("YYYY-MM-DD")
                    end_date = moment(end_date).endOf("years").format("YYYY-MM-DD");
                }
            }


            if (polda_id != 0) {
                polda_id = $('#polda_id').val()
            } else {
                polda_id = ''
            }

            // console.log(`<?= ApiUrl() ?>laporan_harian/export_laphar?date=${date}&polda_id=${polda_id}&filter=${filter}&start_date=${start_date}&end_date=${end_date}`)

            window.open(
                `<?= ApiUrl() ?>laporan_harian/export_laphar?date=${date}&polda_id=${polda_id}&filter=${filter}&start_date=${start_date}&end_date=${end_date}`,
                '_blank' // <- This is what makes it open in a new window.
            );
        }


    })
</script>