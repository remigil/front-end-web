<div class="row">
    <div class="card">
        <div class="card-body row">
            <div id="tableLL" class="table-editable col-md-12">
                <h5>Jumlah rencana anggaran</h5>
                <table class="table table-bordered dt-responsive  nowrap w-100">
                    <tr>
                        <th>POLDA</th>
                        <th>PROGRAM KEGIATAN</th>
                        <th>BELANJA BARANG</th>
                        <th>BELANJA MODAL</th>
                        <th>GAJI PEGAWAI</th>
                    </tr>
                    <form id="form_bagrenmin">
                        <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                        <?php foreach ($data as $key) : ?>
                            <tr>
                                <td style="text-align: center; display:none"><input type="text" name="polda_id[]" value="<?= $key['id'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none; display:none"></td>
                                <td style="text-align: center;"><?= $key['name_polda'] ?></td>
                                <td style="text-align: center;"><input type="number" name="program_kegiatan[]" value="<?= $key['program_kegiatan'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="belanja_barang[]" value="<?= $key['belanja_barang'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="belanja_modal[]" value="<?= $key['belanja_modal'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
                                <td style="text-align: center;"><input type="number" name="gaji_pegawai[]" value="<?= $key['gaji_pegawai'] ?>" style="border: none; text-align:center; width:70px;padding: none; margin:none"></td>
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
                url: "<?= base_url() ?>bagrenmin/Bagrenmin/store_rengar",
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