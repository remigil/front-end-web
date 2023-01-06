<div class="row">
    <div class="card">
        <div class="card-body row">
            <div id="tableLL" class="table-editable col-md-12">
                <h5>Jumlah personil</h5>
                <table class="table table-bordered dt-responsive  nowrap w-100">
                    <tr>
                        <th>POLDA</th>
                        <th>IRJEN</th>
                        <th>BRIGJEN</th>
                        <th>KBP</th>
                        <th>AKBP</th>
                        <th>BRIPDA</th>
                        <th>KP</th>
                        <th>PNS</th>
                        <th>AKP</th>
                        <th>IPTU</th>
                        <th>IPDA</th>
                        <th>AIPTU</th>
                        <th>AIPDA</th>
                        <th>BRIPKA</th>
                        <th>BRIGDR</th>
                        <th>BRIPTU</th>
                    </tr>
                    <form id="form_bagrenmin">
                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <?php foreach ($data as $key) : ?>
                            <tr>
                                <td style="text-align: center; display:none"><input type="text" name="polda_id[]" value="<?= $key['id'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none; display:none"></td>
                                <td style="text-align: center;"><?= $key['name_polda'] ?></td>
                                <td style="text-align: center;"><input type="number" name="irjen[]" value="<?= $key['irjen'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="brigjen[]" value="<?= $key['brigjen'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="kbp[]" value="<?= $key['kbp'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="akbp[]" value="<?= $key['akbp'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="bripda[]" value="<?= $key['bripda'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="kp[]" value="<?= $key['kp'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="pns[]" value="<?= $key['pns'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="akp[]" value="<?= $key['akp'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="iptu[]" value="<?= $key['iptu'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="ipda[]" value="<?= $key['ipda'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="aiptu[]" value="<?= $key['aiptu'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="aipda[]" value="<?= $key['aipda'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="bripka[]" value="<?= $key['bripka'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="brigdr[]" value="<?= $key['brigdr'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="briptu[]" value="<?= $key['briptu'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
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
        const formData = new FormData($('#form_bagrenmin')[0]);
        let tgl = $('#date').val()
        if (tgl == '') {
            Swal.fire(
                `Tanggal Tidak Boleh Kosong`,
                '',
                'error'
            )
        } else {
            $.ajax({
                url: "<?= base_url() ?>bagrenmin/Bagrenmin/store",
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