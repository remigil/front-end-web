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
						$nouud = 1; 
						foreach($getuud as $doc) :
					?>
					<tr>
						<td><?= $nouud++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
					
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
					<?php
						$nopp = 1; 
						foreach($getpp as $doc) :
					?>
					<tr>
						<td><?= $nopp++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
					
					
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
				<?php
						$noperpres = 1; 
						foreach($getperpres as $doc) :
					?>
					<tr>
						<td><?= $noperpres++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
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
				<?php
						$nopolisi = 1; 
						foreach($getpolisi as $doc) :
					?>
					<tr>
						<td><?= $nopolisi++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
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
				<?php
						$nokapolri = 1; 
						foreach($getkapolri as $doc) :
					?>
					<tr>
						<td><?= $nokapolri++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
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
				<?php
						$nokakor = 1; 
						foreach($getkakor as $doc) :
					?>
					<tr>
						<td><?= $nokakor++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
					
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
				<?php
						$nolain = 1; 
						foreach($getlain as $doc) :
					?>
					<tr>
						<td><?= $nolain++;?></td>
						<td><?= $doc['regulation_name']?></td>
						<td><?= $doc['year']?></td>
						<td>
							<a class="btn btn-success" href="<?= url_api() . 'regulation_doc/'. $doc['fileReg']?>">
								<i class="bi bi-file-earmark-arrow-down-fill d-flex align-items-center"></i>
							</a>
							
							
						</td>
						
					</tr>
					<?php endforeach;?>
					
					
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
