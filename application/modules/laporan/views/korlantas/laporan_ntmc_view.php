<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="color:#2e93e6"><?= $data['title'] ?></h1>

            <div class="row justify-content-center" style="background: none;">
                <div class="col-4" style="justify-content: center;display: flexl; background:none">
                    <div class="grid-example mt-2 mt-sm-0" style="background: none;">
                        <div class="cat">
                            <label>
                                <input type="radio" value="1" name="filter" id="harianDisplay"><span> Harian</span>
                            </label>
                        </div>
                        <div class="cat">
                            <label>
                                <input type="radio" value="2" name="filter" id="bulananDisplay"><span> Mingguan</span>
                            </label>
                        </div>
                        <div class="cat">
                            <label>
                                <input type="radio" value="3" name="filter" id="tahunanDisplay"><span> Bulanan</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-4" id="isi">
            </div>
            <div class="row float-right">
                <input hidden type="text" name="halaman" id="halaman" value="1">
                <div class="col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item" id="backHalaman"><a class="page-link" href="javascript:void(0);">Kembali</a></li>
                            <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li> -->
                            <li class="page-item" id="nextHalaman"><a class="page-link" href="javascript:void(0);">Selanjutnya</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        let kategori = $("[name=filter]").val()
        getGrid(kategori)
    })

    $("[name=filter]").on("change", function(e) {
        let kategori = $("[name=filter]").val()
        $('#isi').html('')
        getGrid(this.value);
    });


    function getGrid(kategori) {
        console.log(kategori)
        $.ajax({

            type: "POST",
            url: "<?php echo base_url(); ?>laporan/Laporan_RisetNTMC/getLaporan",
            data: {
                kategori
            },
            dataType: "JSON",
            success: function(result) {
                let html = ``


                if (result.length > 0) {
                    result.map((Element, index) => {
                        html += `<div class="col-md-3">
                        <div class="card">
                            <img src="${'<?= url_api() ?>'}laporan_media_ntmc/${Element.cover}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">${Element.title}</h5>
                                <a href="${'<?= url_api() ?>'}laporan_media_ntmc/${Element.file}" target="_blank" class="btn btn-primary">Unduh</a>
                            </div>
                        </div>
                    </div>`
                    })
                } else {
                    html = '<h4 class="text-center">Laporan belum tersedia</h4>'
                }


                $('#isi').html(html)
            }
        })
    }
</script>