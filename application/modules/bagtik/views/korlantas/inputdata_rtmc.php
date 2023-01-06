<div class="row">
    <div class="card">
        <div class="card-body row">
            <div id="tableLL" class="table-editable col-md-12">
                <h5>Jumlah RTMC Korlantas</h5>
                <table class="table table-bordered dt-responsive  nowrap w-100">
                    <tr>
                        <th>POLDA</th>
                        <th>Jumlah</th>
                    </tr>
                    <form id="form_bagtik">
                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <?php foreach ($data as $key) : ?>
                            <tr>
                                <td style="text-align: center; display:none"><input type="text" name="polda_id[]" value="<?= $key['id'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none; display:none"></td>
                                <td style="text-align: center;"><?= $key['name_polda'] ?></td>
                                <td style="text-align: center;"><input type="number" name="jumlah[]" value="<?= $key['jumlah'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                            </tr>
                        <?php endforeach; ?>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" id="date" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="btn_submit" class="btn btn-primary mb-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $('#btn_submit').on('click', function(e) {
        e.preventDefault();
        const formData = new FormData($('#form_bagtik')[0]);
        let tgl = $('#date').val()
        if (tgl == '') {
            Swal.fire(
                `Tanggal Tidak Boleh Kosong`,
                '',
                'error'
            )
        } else {
            $.ajax({
                url: "<?= base_url() ?>bagtik/Bagtik/store_rtmc",
                method: "POST",
                data: formData,
                dataType: "JSON",
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#overlay").fadeOut(300);
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error'
                        ).then(function() {});
                    }
                }
            })
        }


    })
</script>