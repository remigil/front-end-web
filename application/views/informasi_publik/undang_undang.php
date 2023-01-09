<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url() ?>home">Home</a></li>
            <li><?= $breadcrumb ?></li>
        </ol>
        <h2><?= $headline ?></h2>

    </div>
</section><!-- End Breadcrumbs -->




<!-- Content
================================================== -->

<!-- Container -->

<!-- ======= Contact Section ======= -->

<div class="container">

    <div class="page">

        <!-- <h3>Undang-undang</h3> -->
        <!-- <div class="card">

        <div class="card-body">

            <table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Jenis Peraturan</th>
                        <th width="40%">Nama Peraturan</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div> -->

        <h3>UNDANG-UNDANG REPUBLIK INDONESIA</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">

                <table id="category1" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nouud = 1;
                        foreach ($getuud as $doc) :
                        ?>
                            <tr>
                                <td><?= $nouud++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>

            </div>
        </div>


        <h3>PERATURAN PEMERINTAH REPUBLIK INDONESIA</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">

                <table id="category2" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nopp = 1;
                        foreach ($getpp as $doc) :
                        ?>
                            <tr>
                                <td><?= $nopp++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>



                    </tbody>
                </table>

            </div>
        </div>

        <h3>PERATURAN PRESIDEN REPUBLIK INDONESIA

        </h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">
                <table id="category3" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $noperpres = 1;
                        foreach ($getperpres as $doc) :
                        ?>
                            <tr>
                                <td><?= $noperpres++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>

        <h3>PERATURAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">

                <table id="category4" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nopolisi = 1;
                        foreach ($getpolisi as $doc) :
                        ?>
                            <tr>
                                <td><?= $nopolisi++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>

        <h3>PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA (KAPOLRI)</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">
                <table id="category5" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nokapolri = 1;
                        foreach ($getkapolri as $doc) :
                        ?>
                            <tr>
                                <td><?= $nokapolri++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>

        <h3>PERATURAN KEPALA KORPS LALU LINTAS (KAKORLANTAS) POLRI</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">

                <table id="category6" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nokakor = 1;
                        foreach ($getkakor as $doc) :
                        ?>
                            <tr>
                                <td><?= $nokakor++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>

            </div>
        </div>

        <h3>PERATURAN LAIN-LAIN</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">
                <table id="category7" class="table table-striped display" style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <!-- <th>Jenis Peraturan</th> -->
                            <th width="75%">Nama Peraturan</th>
                            <th>Tahun</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nolain = 1;
                        foreach ($getlain as $doc) :
                        ?>
                            <tr>
                                <td><?= $nolain++; ?></td>
                                <td><?= $doc['regulation_name'] ?></td>
                                <td><?= $doc['year'] ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= url_api() . 'regulation_doc/' . $doc['fileReg'] ?>">
                                        <i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
                                    </a>


                                </td>

                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>

            </div>
        </div>

        <h3>CARI PERATURAN LAIN DI BIDANG LALU LINTAS</h3>
        <hr>
        <div class="card mb-5">

            <div class="card-body">
            <form action="http://www.google.co.id/search" target="google_window" method="get" class="input-group">
                <input maxlength="255 value=" name="q" size="31" type="text" class="form-control" placeholder="Masukan kata kunci" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <input value="100" name="num" type="hidden">
                  <div class="input-group-append">
                  <input value="Search by Google" type="submit" class="btn btn-primary">
                  </div>
                
            </form>

            </div>
        </div>

    </div>


</div>

<!-- Container / End -->







<script>
    $(document).ready(function() {
        $('#category1').DataTable();
        $('#category2').DataTable();
        $('#category3').DataTable();
        $('#category4').DataTable();
        $('#category5').DataTable();
        $('#category6').DataTable();
        $('#category7').DataTable();
    });
</script>