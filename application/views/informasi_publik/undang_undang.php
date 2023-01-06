<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>home">Home</a></li>
          <li><?= $breadcrumb?></li>
        </ol>
        <h2><?= $headline?></h2>

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

	<h3 >UNDANG-UNDANG REPUBLIK INDONESIA</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
						$i = 1; 
						foreach($getuud as $doc) :
					?>
					<tr>
						<td><?= $i++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uud" onclick="<?= $doc['id']?>">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
							
						</td>
						<div class="modal fade" id="uud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"><?= $doc['regulation_name']?></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body" style="padding: 10px !important;">
							<object data="<?= url_api() . 'regulation_doc/'.$doc['fileReg']?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<?php endforeach;?>
					<!-- <tr>
						<td>1</td>
						<td>UNDANG-UNDANG DASAR NEGARA REPUBLIK INDONESIA TAHUN 1945</td>
						<td>1945</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-DASAR-NEGARA-REPUBLIK-INDONESIA-TAHUN-1945.pdf'?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uud">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
							
						</td>

						<div class="modal fade" id="uud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG DASAR NEGARA REPUBLIK INDONESIA TAHUN 1945</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-DASAR-NEGARA-REPUBLIK-INDONESIA-TAHUN-1945.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
							
					</tr> -->
					<!-- <tr>
						<td>2</td>
						<td>UU NOMOR 2 TAHUN 2002 TTG KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
						<td>2002</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UU-NOMOR-2-TAHUN-2002-TTG-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UU NOMOR 2 TAHUN 2002 TTG KEPOLISIAN NEGARA REPUBLIK INDONESIA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UU-NOMOR-2-TAHUN-2002-TTG-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>UNDANG-UNDANG NOMOR 28 TAHUN 2009 TENTANG PAJAK DAERAH DAN RESTRIBUSI DAERAH</td>
						<td>2008</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-28-TAHUN-2009-TENTANG-PAJAK-DAERAH-DAN-RESTRIBUSI-DAERAH.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG NOMOR 28 TAHUN 2009 TENTANG PAJAK DAERAH DAN RESTRIBUSI DAERAH</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-28-TAHUN-2009-TENTANG-PAJAK-DAERAH-DAN-RESTRIBUSI-DAERAH.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>4</td>
						<td>UNDANG-UNDANG NOMOR 22 TAHUN 2009 TENTANG LALU LINTAS DAN ANGKUTAN JALAN</td>
						<td>2009</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-22-TAHUN-2009-TENTANG-LALU-LINTAS-DAN-ANGKUTAN-JALAN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu4">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>

						<div class="modal fade" id="uu4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG NOMOR 22 TAHUN 2009 TENTANG LALU LINTAS DAN ANGKUTAN JALAN</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-22-TAHUN-2009-TENTANG-LALU-LINTAS-DAN-ANGKUTAN-JALAN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>5</td>
						<td>UNDANG-UNDANG NOMOR 25 TAHUN 2009 TENTANG PELAYANAN PUBLIK</td>
						<td>2009</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-25-TAHUN-2009-TENTANG-PELAYANAN-PUBLIK.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu5">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG NOMOR 25 TAHUN 2009 TENTANG PELAYANAN PUBLIK</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-25-TAHUN-2009-TENTANG-PELAYANAN-PUBLIK.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>6</td>
						<td>UU NOMOR 9 TAHUN 2010 TENTANG KEPROTOKOLAN</td>
						<td>2010</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UU-Nomor-9-tahun-2010-tentang-Keprotokolan.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu6">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UU NOMOR 9 TAHUN 2010 TENTANG KEPROTOKOLAN</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UU-Nomor-9-tahun-2010-tentang-Keprotokolan.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>7</td>
						<td>UNDANG-UNDANG NOMOR 19 TAHUN 2016 TENTANG PERUBAHAN ATAS UNDANG-UNDANG NOMOR 11 TAHUN 2008 TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK</td>
						<td>2016</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-19-TAHUN-2016-TENTANG-PERUBAHAN-ATAS-UNDANG-UNDANG-NOMOR-11-TAHUN-2008-TENTANG-INFORMASI-DAN-TRANSAKSI-ELEKTRONIK.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu7">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG NOMOR 19 TAHUN 2016 TENTANG PERUBAHAN ATAS UNDANG-UNDANG NOMOR 11 TAHUN 2008 TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-19-TAHUN-2016-TENTANG-PERUBAHAN-ATAS-UNDANG-UNDANG-NOMOR-11-TAHUN-2008-TENTANG-INFORMASI-DAN-TRANSAKSI-ELEKTRONIK.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>8</td>
						<td>UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 19 TAHUN 2016 TENTANG PERUBAHAN ATAS UNDANG-UNDANG NOMOR 11 TAHUN 2008 TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK</td>
						<td>2016</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UU-19-Tahun-2016.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu8">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 19 TAHUN 2016 TENTANG PERUBAHAN ATAS UNDANG-UNDANG NOMOR 11 TAHUN 2008 TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UU-19-Tahun-2016.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>9</td>
						<td>UNDANG-UNDANG NOMOR 9 TAHUN 2018 TENTANG PENERIMAAN NEGARA BUKAN PAJAK</td>
						<td>2018</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-9-TAHUN-2018-TENTANG-PENERIMAAN-NEGARA-BUKAN-PAJAK.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu9">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG NOMOR 9 TAHUN 2018 TENTANG PENERIMAAN NEGARA BUKAN PAJAK</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-9-TAHUN-2018-TENTANG-PENERIMAAN-NEGARA-BUKAN-PAJAK.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>10</td>
						<td>UNDANG-UNDANG NOMOR 11 TAHUN 2020 TENTANG CIPTA KERJA</td>
						<td>2020</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-11-TAHUN-2020-TENTANG-CIPTA-KERJA.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu10">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG NOMOR 11 TAHUN 2020 TENTANG CIPTA KERJA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/UNDANG-UNDANG-NOMOR-11-TAHUN-2020-TENTANG-CIPTA-KERJA.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>11</td>
						<td>UNDANG UNDANG NOMOR 3 TAHUN 2022 TENTANG IBU KOTA NEGARA ( beserta lampiran 1 dan 2)</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/SalinanUUNomor3Tahun2022LampiranIdanII.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu11">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG UNDANG NOMOR 3 TAHUN 2022 TENTANG IBU KOTA NEGARA ( beserta lampiran 1 dan 2)</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/SalinanUUNomor3Tahun2022LampiranIdanII.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>12</td>
						<td>UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2023 TENTANG KITAB UNDANG-UNDANG HUKUM PIDANA</td>
						<td>2023</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/DOC-20230103-WA0041.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uu12">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="uu12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 1 TAHUN 2023 TENTANG KITAB UNDANG-UNDANG HUKUM PIDANA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/DOC-20230103-WA0041.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr> -->
					
				</tbody>
            </table>

        </div>
    </div>

	<h3 >PERATURAN PEMERINTAH REPUBLIK INDONESIA</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
					<tr>
						<td>1</td>
						<td>PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 59 TAHUN 2013 TENTANG PENGAMANAN PRESIDEN DAN WAKIL PRESIDEN, MANTAN PRESIDEN DAN MANTAN WAKIL PRESIDEN BESERTA KELUARGANYA SERTA TAMU NEGARA SETINGKAT KEPALA NEGARA/KEPALA PEMERINTAHAN</td>
						<td>2013</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PP%20NO%2059%20TAHUN%202013.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pp1">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pp1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 59 TAHUN 2013 TENTANG PENGAMANAN PRESIDEN DAN WAKIL PRESIDEN, MANTAN PRESIDEN DAN MANTAN WAKIL PRESIDEN BESERTA KELUARGANYA SERTA TAMU NEGARA SETINGKAT KEPALA NEGARA/KEPALA PEMERINTAHAN</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PP%20NO%2059%20TAHUN%202013.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>2</td>
						<td>PERATURAN PEMERINTAH NOMOR 55 TAHUN 2012 TENTANG KENDARAAN</td>
						<td>2012</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20PEMERINTAH%20NOMOR%2055%20TAHUN%202012%20TENTANGKENDARAAN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pp2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pp2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN PEMERINTAH NOMOR 55 TAHUN 2012 TENTANG KENDARAAN</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20PEMERINTAH%20NOMOR%2055%20TAHUN%202012%20TENTANGKENDARAAN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>PERATURAN PEMERINTAH NOMOR 76 TAHUN 2020 TENTANG JENIS DA TARIF ATAS JENIS PENERIMAAN NEGARA BUKAN PAJAK YANG BERLAKU PADA POLRI</td>
						<td>2020</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PP%20NO%2076%20THN%202020%20TTG%20TARIF%20PNBP%20POLRI%20DAN%20LAMPIRAN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pp3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pp3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN PEMERINTAH NOMOR 76 TAHUN 2020 TENTANG JENIS DA TARIF ATAS JENIS PENERIMAAN NEGARA BUKAN PAJAK YANG BERLAKU PADA POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PP%20NO%2076%20THN%202020%20TTG%20TARIF%20PNBP%20POLRI%20DAN%20LAMPIRAN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>4</td>
						<td>LAMPIRAN PERATURAN PEMERINTAH NOMOR 76 TAHUN 2020 TENTANG JENIS DA TARIF ATAS JENIS PENERIMAAN NEGARA BUKAN PAJAK YANG BERLAKU PADA POLRI</td>
						<td>2020</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/lampiran-PP-No-76-tahun-2020-ttg-tarif-jenis-PNBP-Polri.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pp4">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pp4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">LAMPIRAN PERATURAN PEMERINTAH NOMOR 76 TAHUN 2020 TENTANG JENIS DA TARIF ATAS JENIS PENERIMAAN NEGARA BUKAN PAJAK YANG BERLAKU PADA POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/lampiran-PP-No-76-tahun-2020-ttg-tarif-jenis-PNBP-Polri.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>5</td>
						<td>PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 80 TAHUN 2012 TENTANG TATA CARA PEMERIKSAAN KENDARAAN BERMOTOR DI JALAN DAN PENINDAKAN PELANGGARAN LALU LINTAS DAN ANGKUTAN JALAN</td>
						<td>2012</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20PEMERINTAH%20REPUBLIK%20INDONESIA%20NOMOR%2080%20TAHUN%202012%20TENTANG%20TATA%20CARA%20PEMERIKSAAN%20KENDARAAN%20BERMOTOR%20DI%20JALAN%20DAN%20PENINDAKAN%20PELANGGARAN%20LALU%20LINTAS%20DAN%20ANGKUTAN%20JALAN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pp5">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pp5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 80 TAHUN 2012 TENTANG TATA CARA PEMERIKSAAN KENDARAAN BERMOTOR DI JALAN DAN PENINDAKAN PELANGGARAN LALU LINTAS DAN ANGKUTAN JALAN</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20PEMERINTAH%20REPUBLIK%20INDONESIA%20NOMOR%2080%20TAHUN%202012%20TENTANG%20TATA%20CARA%20PEMERIKSAAN%20KENDARAAN%20BERMOTOR%20DI%20JALAN%20DAN%20PENINDAKAN%20PELANGGARAN%20LALU%20LINTAS%20DAN%20ANGKUTAN%20JALAN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					
					
				</tbody>
            </table>

        </div>
    </div>

	<h3 >PERATURAN PRESIDEN REPUBLIK INDONESIA

	</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
					<tr>
						<td>1</td>
						<td>PERPRES NOMOR 5 TAHUN 2015 TENTANG SAMSAT RANMOR</td>
						<td>2015</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%205%20TAHUN%202015%20TENTANG%20PENYELENGGARAAN%20SISTEM%20ADMINISTRASI%20MANUNGGAL.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perpres1">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="perpres1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERPRES NOMOR 5 TAHUN 2015 TENTANG SAMSAT RANMOR</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%205%20TAHUN%202015%20TENTANG%20PENYELENGGARAAN%20SISTEM%20ADMINISTRASI%20MANUNGGAL.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>2</td>
						<td>PERATURAN PRESIDEN NOMOR 16 TAHUN 2018 TENTANG PENGADAAN BARANG ATAU JASA PEMERINTAH</td>
						<td>2018</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%2016%20TAHUN%202018%20TENTANG%20PENGADAAN%20BARANGJASA%20PEMERINTAH.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perpres2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="perpres2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN PRESIDEN NOMOR 16 TAHUN 2018 TENTANG PENGADAAN BARANG ATAU JASA PEMERINTAH</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%2016%20TAHUN%202018%20TENTANG%20PENGADAAN%20BARANGJASA%20PEMERINTAH.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>Inpres Nomor 1 Tahun 2022 Tentang Optimalisasi Pelaksanaan Program Jaminan Kesehatan Nasional (BPJS Kesehatan untuk SIM, STNK)</td>
						<td>2020</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/INSTRUKSI%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%201%20TAHUN%202022%20TENTANG%20OPTIMALISASI%20PELAKSANAAN%20PROGRAM%20JAMINAN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perpres3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="perpres3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Inpres Nomor 1 Tahun 2022 Tentang Optimalisasi Pelaksanaan Program Jaminan Kesehatan Nasional (BPJS Kesehatan untuk SIM, STNK)</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/INSTRUKSI%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%201%20TAHUN%202022%20TENTANG%20OPTIMALISASI%20PELAKSANAAN%20PROGRAM%20JAMINAN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>4</td>
						<td>PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 54 TAHUN 2022 TENTANG PERUBAHAN KEDUA ATAS PERATURAN PRESIDEN NOMOR 52 TAHUN 2OIO TENTANG SUSUNAN ORGANISASI DAN TATA KERJA KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%2054%20TAHUN%202022%20TENTANG%20PERUBAHAN%20KEDUA%20ATAS%20PERATURAN%20PRESIDEN%20NOMOR%2052%20TAHUN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perpres4">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="perpres4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 54 TAHUN 2022 TENTANG PERUBAHAN KEDUA ATAS PERATURAN PRESIDEN NOMOR 52 TAHUN 2OIO TENTANG SUSUNAN ORGANISASI DAN TATA KERJA KEPOLISIAN NEGARA REPUBLIK INDONESIA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20PRESIDEN%20REPUBLIK%20INDONESIA%20NOMOR%2054%20TAHUN%202022%20TENTANG%20PERUBAHAN%20KEDUA%20ATAS%20PERATURAN%20PRESIDEN%20NOMOR%2052%20TAHUN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					
				</tbody>
            </table>

        </div>
    </div>

	<h3 >PERATURAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
					<tr>
						<td>1</td>
						<td>PERATURAN POLRI NOMOR 2 TAHUN 2020 TENTANG PERUBAHAN KEDUA ATAS PERKAP NOMOR 6 TAHUN 2017 TENTANG STOK PADA TINGKAT MABES POLRI</td>
						<td>2017</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%202%20TAHUN%202020%20TENTANG%20PERUBAHAN%20KEDUA%20ATAS%20PERKAP%20NOMOR%206%20TAHUN%202017%20TENTANG%20STOK%20PADA%20TINGKAT%20MABES%20POLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk1">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN POLRI NOMOR 2 TAHUN 2020 TENTANG PERUBAHAN KEDUA ATAS PERKAP NOMOR 6 TAHUN 2017 TENTANG STOK PADA TINGKAT MABES POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%202%20TAHUN%202020%20TENTANG%20PERUBAHAN%20KEDUA%20ATAS%20PERKAP%20NOMOR%206%20TAHUN%202017%20TENTANG%20STOK%20PADA%20TINGKAT%20MABES%20POLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>2</td>
						<td>PERATURAN POLRI NOMOR 8 TAHUN 2018 TENTANG PERUBAHAN KEDUA ATAS PERATURAN KEPOLRI NOMOR 9 TAHUN 2015 TENTANG PAKAIAN DINAS PEGAWAI NEGERI PADA KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
						<td>2018</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%208%20TAHUN%202018%20TENTANG%20PERUBAHAN%20KEDUA%20ATAS%20PERATURAN%20KEPOLRI%20NOMOR%209%20TAHUN%202015%20TENTANG%20PAKAIAN%20DINAS%20PEGAWAI%20NEGERI%20PADA%20KEPOLISIAN%20RI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN POLRI NOMOR 8 TAHUN 2018 TENTANG PERUBAHAN KEDUA ATAS PERATURAN KEPOLRI NOMOR 9 TAHUN 2015 TENTANG PAKAIAN DINAS PEGAWAI NEGERI PADA KEPOLISIAN NEGARA REPUBLIK INDONESIA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%208%20TAHUN%202018%20TENTANG%20PERUBAHAN%20KEDUA%20ATAS%20PERATURAN%20KEPOLRI%20NOMOR%209%20TAHUN%202015%20TENTANG%20PAKAIAN%20DINAS%20PEGAWAI%20NEGERI%20PADA%20KEPOLISIAN%20RI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>PERATURAN POLRI NOMOR 14 TAHUN 2018 TENTANG REVISI PERKAP NOMOR 22 TAHUN 2010 TENTANG SOTK POLDA</td>
						<td>2018</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%2014%20TAHUN%202018%20TENTANG%20REVISI%20PERKAP%20NOMOR%2022%20TAHUN%202010%20TENTANG%20SOTK%20POLDA.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN POLRI NOMOR 14 TAHUN 2018 TENTANG REVISI PERKAP NOMOR 22 TAHUN 2010 TENTANG SOTK POLDA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%2014%20TAHUN%202018%20TENTANG%20REVISI%20PERKAP%20NOMOR%2022%20TAHUN%202010%20TENTANG%20SOTK%20POLDA.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>4</td>
						<td>PERATURAN POLRI NOMOR 7 TAHUN 2021 TENTANG REGISTRASI DAN IDENTIFIKASI KENDARAAN BERMOTOR</td>
						<td>2021</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%207%20TAHUN%202021%20TENTANG%20REGISTRASI%20DAN%20IDENTIFIKASI%20KENDARAAN%20BERMOTOR.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk4">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN POLRI NOMOR 7 TAHUN 2021 TENTANG REGISTRASI DAN IDENTIFIKASI KENDARAAN BERMOTOR</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%207%20TAHUN%202021%20TENTANG%20REGISTRASI%20DAN%20IDENTIFIKASI%20KENDARAAN%20BERMOTOR.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>5</td>
						<td>PERATURAN POLRI NOMOR 2 TAHUN 2021 TENTANG SUSUNAN ORGANISASI DAN TATA KERJA PADA TINGKAT POLRES DAN POLSEK</td>
						<td>2021</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%202%20TAHUN%202021%20TENTANG%20SUSUNAN%20ORGANISASI%20DAN%20TATA%20KERJA%20PADA%20TINGKAT%20POLRES%20DAN%20POLSEK.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk5">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN POLRI NOMOR 2 TAHUN 2021 TENTANG SUSUNAN ORGANISASI DAN TATA KERJA PADA TINGKAT POLRES DAN POLSEK</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20POLRI%20NOMOR%202%20TAHUN%202021%20TENTANG%20SUSUNAN%20ORGANISASI%20DAN%20TATA%20KERJA%20PADA%20TINGKAT%20POLRES%20DAN%20POLSEK.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>6</td>
						<td>PERATURAN KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 5 TAHUN 2021 TENTANG PENERBITAN DAN PENANDAAN SURAT IZIN MENGEMUDI</td>
						<td>2021</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA%20NOMOR%205%20TAHUN%202021%20TENTANG%20PENERBITAN%20DAN%20PENANDAAN%20SURAT%20IZIN%20MENGEMUDI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk6">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 5 TAHUN 2021 TENTANG PENERBITAN DAN PENANDAAN SURAT IZIN MENGEMUDI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA%20NOMOR%205%20TAHUN%202021%20TENTANG%20PENERBITAN%20DAN%20PENANDAAN%20SURAT%20IZIN%20MENGEMUDI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>7</td>
						<td>PERATURAN KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG PENCABUTAN PERATURAN POLRI NOMOR 3 TAHUN 2011 TENTANG PEMBERIAN PENGHARGAAN DI LINGKUNGAN POLRI</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERPOL-8-2022.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pk7">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pk7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG PENCABUTAN PERATURAN POLRI NOMOR 3 TAHUN 2011 TENTANG PEMBERIAN PENGHARGAAN DI LINGKUNGAN POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERPOL-8-2022.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					
				</tbody>
            </table>

        </div>
    </div>

	<h3 >PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA (KAPOLRI)</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
					<tr>
						<td>1</td>
						<td>PERATURAN KAPOLRI NOMOR 6 TAHUN 2022 TENTANG PERUBAHAN KEDUA PERATURAN KAPOLRI NOMOR TAHUN 2018 TENTANG SERAGAM DINAS.</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERKAP%20NOMOR%206%20TH%202022%20TTG%20PERUBAHAN%20KEDUA%20PERKAP%20NO%20TH%202018%20TTG%20SERAGAM%20DINAS%201.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk1">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KAPOLRI NOMOR 6 TAHUN 2022 TENTANG PERUBAHAN KEDUA PERATURAN KAPOLRI NOMOR TAHUN 2018 TENTANG SERAGAM DINAS.</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERKAP%20NOMOR%206%20TH%202022%20TTG%20PERUBAHAN%20KEDUA%20PERKAP%20NO%20TH%202018%20TTG%20SERAGAM%20DINAS%201.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>2</td>
						<td>PERATURAN KAPOLRI NOMOR 1 TAHUN 2019 TENTANG SISTEM MANAJEMEN DAN STANDAR KEBERHASILAN OPERASIONAL POLRI</td>
						<td>2019</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KAPOLRI%20NOMOR%201%20TAHUN%202019%20TENTANG%20SISTEM%20MANAJEMEN%20DAN%20STANDAR%20KEBERHASILAN%20OPERASIONAL%20POLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KAPOLRI NOMOR 1 TAHUN 2019 TENTANG SISTEM MANAJEMEN DAN STANDAR KEBERHASILAN OPERASIONAL POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KAPOLRI%20NOMOR%201%20TAHUN%202019%20TENTANG%20SISTEM%20MANAJEMEN%20DAN%20STANDAR%20KEBERHASILAN%20OPERASIONAL%20POLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>PERATURAN KAPOLRI NOMOR 6 TAHUN 2017 TENTANG SUSUNAN ORGANISASI DAN TAT KERJA SATUAN ORGANISASI PADA TINGKAT MABES POLRI</td>
						<td>2017</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KAPOLRI%20NOMOR%206%20TAHUN%202017%20TENTANG%20SUSUNAN%20ORGANISASI%20DAN%20TAT%20KERJA%20SATUAN%20ORGANISASI%20PADA%20TINGKAT%20MABES%20POLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KAPOLRI NOMOR 6 TAHUN 2017 TENTANG SUSUNAN ORGANISASI DAN TAT KERJA SATUAN ORGANISASI PADA TINGKAT MABES POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KAPOLRI%20NOMOR%206%20TAHUN%202017%20TENTANG%20SUSUNAN%20ORGANISASI%20DAN%20TAT%20KERJA%20SATUAN%20ORGANISASI%20PADA%20TINGKAT%20MABES%20POLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>4</td>
						<td>PERATURAN KAPOLRI NOMOR 7 TAHUN 2017 TENTANG NASKAH DINAS DAN TATA PERSURATAN DINAS DILINGKUNGAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
						<td>2017</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN-KAPOLRI-NOMOR-7-TAHUN-2017-TENTANG-NASKAH-DINAS-DAN-TATA-PERSURATAN-DINAS-DILINGKUNGAN-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk4">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KAPOLRI NOMOR 7 TAHUN 2017 TENTANG NASKAH DINAS DAN TATA PERSURATAN DINAS DILINGKUNGAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN-KAPOLRI-NOMOR-7-TAHUN-2017-TENTANG-NASKAH-DINAS-DAN-TATA-PERSURATAN-DINAS-DILINGKUNGAN-KEPOLISIAN-NEGARA-REPUBLIK-INDONESIA.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>5</td>
						<td>PERATURAN KAPOLRI NOMOR 3 TAHUN 2012 TENTANG PENERBITAN REKOMENDASI STNK DAN TNKB KHUSUS DAN RAHASIA BAGI KENDARAAN BERMOTOR DINAS</td>
						<td>2012</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KAPOLRI%20NOMOR%203%20TAHUN%202012%20TENTANG%20PENERBITAN%20REKOMENDASI%20STNK%20DAN%20TNKB%20KHUSUS%20DAN%20RAHASIA%20BAGI%20KENDARAAN%20BERMOTOR%20DINAS.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk5">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KAPOLRI NOMOR 3 TAHUN 2012 TENTANG PENERBITAN REKOMENDASI STNK DAN TNKB KHUSUS DAN RAHASIA BAGI KENDARAAN BERMOTOR DINAS</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KAPOLRI%20NOMOR%203%20TAHUN%202012%20TENTANG%20PENERBITAN%20REKOMENDASI%20STNK%20DAN%20TNKB%20KHUSUS%20DAN%20RAHASIA%20BAGI%20KENDARAAN%20BERMOTOR%20DINAS.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>6</td>
						<td>PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 8 TAHUN 2021 TENTANG PERUBAHAN ATAS PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 1 TAHUN 2019 TENTANG SISTEM, MANAJEMEN DAN STANDAR KEBERHASILAN OPERASIONAL KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
						<td>2021</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KEPALA%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA%20NOMOR%208%20TAHUN%202021%20TENTANG%20PERUBAHAN%20ATAS%20NOMOR%201%20TAHUN%202019%20TENTANG%20SISTEM,%20MANAJEMEN%20DAN%20STANDAR%20KEBERHASILAN%20OPERASIONAL%20POLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk6">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 8 TAHUN 2021 TENTANG PERUBAHAN ATAS PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 1 TAHUN 2019 TENTANG SISTEM, MANAJEMEN DAN STANDAR KEBERHASILAN OPERASIONAL KEPOLISIAN NEGARA REPUBLIK INDONESIA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KEPALA%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA%20NOMOR%208%20TAHUN%202021%20TENTANG%20PERUBAHAN%20ATAS%20NOMOR%201%20TAHUN%202019%20TENTANG%20SISTEM,%20MANAJEMEN%20DAN%20STANDAR%20KEBERHASILAN%20OPERASIONAL%20POLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>7</td>
						<td>PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 4 TAHUN 2021 TENTANG MANAJEMEN RISIKO DI LINGKUNGAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
						<td>2021</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KEPALA%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA%20NOMOR%204%20TAHUN%202021%20TENTANG%20MANAJEMEN%20RISIKO%20DI%20LINGKUNGAN%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pkk7">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="pkk7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KEPALA KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 4 TAHUN 2021 TENTANG MANAJEMEN RISIKO DI LINGKUNGAN KEPOLISIAN NEGARA REPUBLIK INDONESIA</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KEPALA%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA%20NOMOR%204%20TAHUN%202021%20TENTANG%20MANAJEMEN%20RISIKO%20DI%20LINGKUNGAN%20KEPOLISIAN%20NEGARA%20REPUBLIK%20INDONESIA.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					
				</tbody>
            </table>

        </div>
    </div>

	<h3 >PERATURAN KEPALA KORPS LALU LINTAS (KAKORLANTAS) POLRI</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
					<tr>
						<td>1</td>
						<td>KEPUTUSAN KAKORLANTAS NOMOR KEP-166-VIII-2019 TENTANG NRKB PILIHAN</td>
						<td>2019</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/KEPUTUSAN%20KAKORLANTAS%20NOMOR%20KEP%20166%20VIII%202019%20TENTANG%20NRKB%20PILIHAN.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kor1">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="kor1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">KEPUTUSAN KAKORLANTAS NOMOR KEP-166-VIII-2019 TENTANG NRKB PILIHAN</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/KEPUTUSAN%20KAKORLANTAS%20NOMOR%20KEP%20166%20VIII%202019%20TENTANG%20NRKB%20PILIHAN.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>2</td>
						<td>PERATURAN KAKORLANTAS POLRI NOMOR 1 TAHUN 2015 TENTANG STANDAR PELAYANAN NATIONAL TRAFFIC MANAGEMENT CENTER (NTMC) POLRI</td>
						<td>2015</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERATURAN%20KAKORLANTAS%20POLRI%20NOMOR%201%20TAHUN%202015%20TENTANG%20STANDAR%20PELAYANAN%20NATIONAL%20TRAFFIC%20MANAGEMENT%20CENTER%20NTMC%20POLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kor2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="kor2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KAKORLANTAS POLRI NOMOR 1 TAHUN 2015 TENTANG STANDAR PELAYANAN NATIONAL TRAFFIC MANAGEMENT CENTER (NTMC) POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERATURAN%20KAKORLANTAS%20POLRI%20NOMOR%201%20TAHUN%202015%20TENTANG%20STANDAR%20PELAYANAN%20NATIONAL%20TRAFFIC%20MANAGEMENT%20CENTER%20NTMC%20POLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>PERATURAN KEPALA KORPS LALU LINTAS KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 1 TAHUN 2021 TENTANG PENGELOLAAN MATERIEL REGISTRASI DAN IDENTIFIKASI</td>
						<td>2021</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/PERKAKOR%20NO%201%20TH%202021%20TTG%20MATERIEL%20REGIDENT%20SBST%2024%20MEI%202021.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kor3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="kor3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">PERATURAN KEPALA KORPS LALU LINTAS KEPOLISIAN NEGARA REPUBLIK INDONESIA NOMOR 1 TAHUN 2021 TENTANG PENGELOLAAN MATERIEL REGISTRASI DAN IDENTIFIKASI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/PERKAKOR%20NO%201%20TH%202021%20TTG%20MATERIEL%20REGIDENT%20SBST%2024%20MEI%202021.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					
					
				</tbody>
            </table>

        </div>
    </div>

	<h3 >PERATURAN LAIN-LAIN</h3>
	<hr>
    <div class="card mb-5">

        <div class="card-body">

            <table id="datatable" class="table table-striped table-hover dt-responsive w-100">
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
					<tr>
						<td>1</td>
						<td>SOP KORLANTAS POLRI TAHUN 2018</td>
						<td>2018</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/SOP-KORLANTAS-POLRI-TAHUN-2018-1.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lain1">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="lain1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">SOP KORLANTAS POLRI TAHUN 2018</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/SOP-KORLANTAS-POLRI-TAHUN-2018-1.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>2</td>
						<td>VADEMIKUM POLISI LALU LINTAS TAHUN 2018</td>
						<td>2018</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/SEJARAH%20POLANTAS%20VADEMIKUM%20MARET%202021.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lain2">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="lain2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">VADEMIKUM POLISI LALU LINTAS TAHUN 2018</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/SEJARAH%20POLANTAS%20VADEMIKUM%20MARET%202021.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>3</td>
						<td>BIJAK KAPOLRI BIDANG OPSNAL TAHUN 2022</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/BIJAK-KAPOLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lain3">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="lain3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">BIJAK KAPOLRI BIDANG OPSNAL TAHUN 2022</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/BIJAK-KAPOLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>4</td>
						<td>KEPUTUSAN MENTRI KEUANGAN 2022</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/KEPUTUSAN%20MENTRI%20KEUANGAN%202022%20NOMOR%2058%20TH%202022.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lain4">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="lain4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">KEPUTUSAN MENTRI KEUANGAN 2022</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/KEPUTUSAN%20MENTRI%20KEUANGAN%202022%20NOMOR%2058%20TH%202022.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					<tr>
						<td>5</td>
						<td>KEPUTUSAN KAPOLRI TENTANG BENTUK TANDA KEMAHIRAN KORLANTAS POLRI PADA SERAGAM POLRI</td>
						<td>2022</td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/KEPUTUSAN%20KAPOLRI%20TTG%20BENTUK%20TANDA%20KEMAHIRAN%20KORLANTAS%20POLRI%20PD%20SERAGAM%20POLRI.pdf'?>"><i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i></a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lain5">
								<i class="bi bi-eye-fill d-flex align-items-center"></i>
							</button>
						</td>
						<div class="modal fade" id="lain5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">KEPUTUSAN KAPOLRI TENTANG BENTUK TANDA KEMAHIRAN KORLANTAS POLRI PADA SERAGAM POLRI</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<object data="<?= url_api() . 'regulation_doc/KEPUTUSAN%20KAPOLRI%20TTG%20BENTUK%20TANDA%20KEMAHIRAN%20KORLANTAS%20POLRI%20PD%20SERAGAM%20POLRI.pdf'?>" type="application/pdf" width="100%" height="600px">
								
							</object>
							</div>
							
							</div>
						</div>
						</div>
					</tr>
					
					
				</tbody>
            </table>

        </div>
    </div>
</div>

	
</div>

<!-- Container / End -->

  





<script>
    $(document).ready(function() {
		
        $('.dropify').dropify();

        userDataTable = $('#datatable').DataTable({

            responsive: true,

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete: function(settings, json) {},

            retrieve: true,

            processing: true,

            serverSide: true,

            serverMethod: 'POST',

            ajax: {

                dataType: 'json',

                url: '<?php echo base_url(); ?>Undang_undang/serverSideTable',

                data: function(data) {

                    $("#overlay").fadeIn(300);

                    // console.log(data);

                    // data.filterTgl = $('[name=event_date]').val();

                    // data.filterTgl2 = $('[name=event_date_to]').val(); 

                    // data.filterStatus = $('[name=status]').val();

                    // data.filterName = $('[name=group_name]').val();

                    // data.filterPocName = $('[name=group_poc_name]').val();

                    // data.filterPhone = $('[name=poc_phone]').val();

                    // data.filterThreat = $('[name=threat_level]').val();

                    data.orderField = data.order[0] != undefined ? data.order[0].column : '';

                    data.orderValue = data.order[0] != undefined ? data.order[0].dir : '';

                    data.page = Number(data.start / data.length) + 1

                },

                beforeSend: function(xhr, settings) {

                },

                "dataSrc": function(result) {

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [

                {
                    data: 'id'
                },
                {
                    data: 'regulation_category'
                },
                {
                    data: 'regulation_name'
                },
                {
                    data: 'year'
                },
                {
                    data: 'action',
                    orderable: false
                }

            ],

            order: [
                [0, "DESC"]
            ],

            drawCallback: function(settings) {

                $("#overlay").fadeOut(300);

            }


        });

    });

    

	
</script>
