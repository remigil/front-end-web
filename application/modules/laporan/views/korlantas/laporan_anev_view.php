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
                                </select>
                                <label class="labelmui">Jenis waktu laporan</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="material-selectfield mb-3">
                                <div class="material-textfield mb-3">
                                    <input type="date" name="anev_date" id="anev_date" style="width:100% ;">
                                    <label class="labelmui">Filter tanggal</label>
                                </div>
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
            $('#anev_date').attr('type', 'date')
        } else if (options_waktu == 2) {
            $('#anev_date').attr('type', 'month')
        } else {
            $('#anev_date').attr('disabled')
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
            let anev_date = $('#anev_date').val()
            let url = ''
            if (anev_date == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Tanggal harus dipiliih',
                })
            }

            if (options_waktu == 1) {
                url = `anev/getDaily?mode=pdf-download&date=${anev_date}`
            } else if (options_waktu == 2) {
                let month = anev_date.split('-');
                url = `anev/getMonthly?mode=pdf-download&month=${month[1]}&year=${month[0]}`;
            }
            window.open(
                `<?= ApiUrl() ?>${url}`,
                '_blank' // <- This is what makes it open in a new window.
            );
        }


    })
</script>