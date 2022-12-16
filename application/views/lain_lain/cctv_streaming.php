<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url()?>home">Home</a></li>
          <li><?= $breadcrumb?></li>
        </ol>
        <h2><?= $headline?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

	<div class="container">
		<h3 class="text-center mb-5">CCTV Terintegrasi - Korlantas Polri</h3>

		<div class="row align-items-center">
		
			<div class="col-md-6">
				<div class="form-floating mb-3">
				   
					<select class="form-select" name="kategoriFilter" style="height: 50px;">
						<option selected value="">Pilih Kategori CCTV</option>
						<option value="CCTV MAINROAD">CCTV MAINROAD</option>
						<option value="CCTV GERBANG">CCTV GERBANG</option>
						<option value="CCTV RAMP">CCTV RAMP</option>
						<option value="CCTV ETHLE">CCTV ETHLE</option>
						<option value="BALISATUDATA">BALI SATU DATA</option>
						<option value="CCTV">CCTV</option> 
					</select>
					<label for="kategoriFilter">Filter CCTV</label>
				</div>
			</div>
		
			<div class="col-md-6">
				<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
					<div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" name="searchFilter" placeholder="Search" style="height: 50px;">
							<label for="searchFilter">Search</label>
						</div>
					</div> 
				</div> 
			</div>
			
		
		</div>
		<!-- end row -->
		 
		<div class="row" id="listCCTV"></div>
		
		<div class="row">
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
 
<script>
    $(document).ready(function() { 

        serverSideGetCCTV(); 

        
        
        let countlistCCTV = 0;
        let listCCTV = ""; 
        $('[name=kategoriFilter]').on("change", function (e) {
            countlistCCTV = 0;
            listCCTV = "";d
            $('#listCCTV').html(listCCTV); 
            serverSideGetCCTV();
        });
        $('[name=searchFilter]').on("change", function (e) {
            countlistCCTV = 0;
            listCCTV = "";
            $('#listCCTV').html(listCCTV); 
            serverSideGetCCTV();
        });

        // if($('[name=halaman]').val() == 1){
        //     $("#backHalaman").addClass("disabled");
        // }
        $("#backHalaman").on("click", function (e) {
            var nilaiHalaman = parseFloat($('[name=halaman]').val()) - 1;
            if(nilaiHalaman < 1){
                $("#backHalaman").addClass("disabled");
            }else{
                $('[name=halaman]').val(nilaiHalaman);
                serverSideGetCCTV()
            } 
        });
        $("#nextHalaman").on("click", function (e) {
            var nilaiHalaman = parseFloat($('[name=halaman]').val()) + 1;
            if(nilaiHalaman > 1){
                $("#backHalaman").removeClass("disabled");
                $('[name=halaman]').val(nilaiHalaman);
                serverSideGetCCTV()
            }
        });
        function serverSideGetCCTV(){
            $("#overlay").fadeIn(300); 
            $.ajax({
                type : "POST",
                url : "<?php echo base_url();?>Cctv_streaming/getCCTV", 
                data : {
                    "kategoriFilter" : $('[name=kategoriFilter]').val(),
                    "searchFilter": $('[name=searchFilter]').val(),
                    "page": $('[name=halaman]').val(),
                }, 
                dataType : "JSON",
                success : function(result){  
                    let ressData = result['data'];
                    if(ressData.length > 0){

                    }else{

                    } 
                    let ress = ressData.filter(function (e) {
                        return e.lat_cctv != null && e.lng_cctv != null;
                    });   
                    // console.log(result);

                    $("#overlay").fadeOut(300);
                    if(ress.length > 0){   
                        countlistCCTV = 0;
                        listCCTV = "";

                        ress.forEach(el => {
                            if(el.ip_cctv == 'https://balisatudata.baliprov.go.id/peta-cctv'){
                                resource = `<iframe id="myIframe" src="${el.link_cctv}" style="width: 230px; height: 250.25px;"></iframe>`;
                            }else{
                                resource = `<img style="width: 230px;" src="${el.link_cctv}" />`;
                            }
                            countlistCCTV += 1;
                            listCCTV += `
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <div class="dropdown text-end">
                                                <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                
                                                
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                ${resource}
                                                </div>
                                            </div>
                                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">${el.type_cctv}</a></h5>
                                            <p class="text-muted mb-2">${el.address_cctv}</p>
                                            
                                        </div> 
                                    </div> 
                                </div>
                            `;
                            $('#listCCTV').html(listCCTV); 
                        });  
                        
                    }else{
                        listCCTV = "";
                        $('#listCCTV').html(listCCTV); 
                    }
                }
            });
        } 


        

        

    });



    $('.detailRow').on('click', function() {
        $('#detailModal').modal('show')
        $('.modal-title').text('Detail CCTV')
        $('[name="nama"]').val($(this).data('nama'))
        $('[name="alamat"]').val($(this).data('ip'))
        $('[name="provinsi"]').val($(this).data('provinsi'))
        $('[name="kota"]').val($(this).data('kota'))
        $('[name="latitude"]').val($(this).data('lat'))
        $('[name="longitude"]').val($(this).data('long'))
        $('[name="username"]').val($(this).data('username'))
        $('[name="password"]').val($(this).data('password'))
        $('#submit_edit').hide()
    })

    $('.editRow').on('click', function() {
        $('.modal-title').text('Ubah Akun')
        $('#detailModal').modal('show')
        $('[name="nama_akun"]').val($(this).data('akun'))
        $('[name="password"]').val($(this).data('password'))
        $('[name="tingkat"]').val($(this).data('tingkat'))
        $('[name="akses"]').val($(this).data('akses'))
        $('#submit_edit').show()
    })

    
</script>
