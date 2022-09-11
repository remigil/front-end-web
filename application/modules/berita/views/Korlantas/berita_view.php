<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->
<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?></a></li>
        <li class="breadcrumb-item active fw-bold" aria-current="page">Daftar <?= $title; ?></li>
    </ol>
</nav>
<!-- </div> -->

<div class="page">
    <button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target=".TambahBerita">Tambah Berita</button>
    <div class="col-12">

        <div class="card mt-3">
            <div class="card-body">
			<table id="datatable" class="table dt-responsive w-100">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Kategori Berita</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Author</th>
                        <th>Tanggal Berita</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
			</table>
            </div>
        </div>

    </div>
</div>
<!-- End Page -->


<div class="modal fade TambahBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Tambah Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" method="post" enctype="multipart/form-data">
				<div class="material-selectfield mb-3">
                        <select name="kategoriBerita" id="form-select">
                            <!-- <select name="" id=""  multiple required> -->
                            <option selected>Pilih Kategori</option>
                            <option value="1">Berita PPKM</option>
                            <option value="2">Berita Kecelakaan Lalu Lintas</option>
                            <option value="3">Berita Pelanggaran Lalu Lintas</option>
                            <option value="4">Berita Kemacetan Lalu Lintas</option>
                            <option value="5">Berita Satpas</option>
                            <option value="6">Berita ETLE</option>
                            <option value="7">Berita Kontijensi</option>
                            
                        </select>
                        <label class="labelmui">Kategori Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="judulBerita" id="" style="width:100% ;">
                        <label for="" class="labelmui">Judul Berita</label>
                    </div>
					
                    <div class="material-textfield">
                        <input type="text" name="isiBerita" id="" style="width:100% ;">
                        <label for="" class="labelmui">Isi Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="photo" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">Foto Berita</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade UbahBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Edit Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form" method="post" enctype="multipart/form-data">
					<input hidden name="id" value="<?php echo $data['getDetail']['data']['id'];?>" type="text">
				<div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option <?= ($data['getDetail']['data']['news_category'] == null ? 'selected' : '');?> value="">Pilih Kategori</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '1' ? 'selected' : '');?>value="1">Berita PPKM</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '2' ? 'selected' : '');?>value="2">Berita Kecelakaan Lalu Lintas</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '3' ? 'selected' : '');?>value="3">Berita Pelanggaran Lalu Lintas</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '4' ? 'selected' : '');?>value="4">Berita Kemacetan Lalu Lintas</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '5' ? 'selected' : '');?>value="5">Berita Satpas</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '6' ? 'selected' : '');?>value="6">Berita ETLE</option>
                            <option <?= ($data['getDetail']['data']['news_category'] == '7' ? 'selected' : '');?>value="7">Berita Kontijensi</option>
                            
                        </select>
                        <label class="labelmui">Kategori Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Judul Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Isi Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">Foto Berita</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary waves-effect float-end me-4" style="width: 25%; letter-spacing: 2px;">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade DetailBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary ">
                <h5 class="modal-title text-white" id="myLargeModalLabel">Detail Berita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form">
				<div class="material-selectfield mb-3">
                        <select name="" id="">
                            <!-- <select name="" id=""  multiple required> -->
                            <option selected>Pilih Kategori</option>
                            <option value="1">Berita PPKM</option>
                            <option value="2">Berita Kecelakaan Lalu Lintas</option>
                            <option value="3">Berita Pelanggaran Lalu Lintas</option>
                            <option value="4">Berita Kemacetan Lalu Lintas</option>
                            <option value="5">Berita Satpas</option>
                            <option value="6">Berita ETLE</option>
                            <option value="7">Berita Kontijensi</option>
                            
                        </select>
                        <label class="labelmui">Kategori Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Judul Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="text" name="" id="" style="width:100% ;">
                        <label for="" class="labelmui">Isi Berita</label>
                    </div>
                    <div class="material-textfield">
                        <input type="file" name="" id="" style="width:100% ;" class="form-control">
                        <label for="" class="labelmui">Foto Berita</label>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade UploadBerita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="myLargeModalLabel">Upload File</h5>
            </div>
            <div class="modal-body">

                <form action="" class="form">
                    <div class="col-md-12">
                        <input type="file" name="photo" class="dropify rounded" data-allowed-file-extensions="jpg png jpeg" data-default-file="<?php echo base_url(); ?>assets/no_image.png" />
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect float-end mt-3" style="width: 100%; letter-spacing: 2px;">UPLOAD FILE</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).ready(function() {
        $('.dropify').dropify();

        var userDataTable = $('#datatable').DataTable({ 

            responsive: true, 

            scrollX: true,

            // sDom: '<"dt-panelmenu clearfix"Bflr>t<"dt-panelfooter clearfix"ip>',

            // buttons: ["excel", "csv", "pdf"],

            oLanguage: {

                sSearch: 'Search:'

            },

            initComplete : function (settings, json) { },

            retrieve : true,

            processing : true,

            serverSide: true,

            serverMethod: 'POST',

            ajax : {

                dataType: 'json',

                url: '<?php echo base_url();?>berita/Berita/serverSideTable',

                data: function(data){

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

                beforeSend: function (xhr, settings) {
                    
                },

                "dataSrc": function (result) { 

                    result.iTotalRecords = result.iTotalRecords;

                    result.iTotalDisplayRecords = result.iTotalRecords;

                    return result.aaData;

                }

            },

            columns: [ 

                { data: 'id'}, 
                { data: 'news_category'},
                { data: 'title'}, 
                { data: 'content'},
                { data: 'author'},  
                { data: 'created_at'},  
                    
                { data: 'action' , orderable : false }

            ],

            order: [[ 0, "DESC" ]],

            drawCallback : function(settings){

                $("#overlay").fadeOut(300); 

            }   

        });   
        
        $(".form").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.form')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>berita/Berita/store",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,  
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'success'
                        ).then(function() { 
                            $(".TambahBerita").modal('hide');
                            userDataTable.draw(); 
                        }); 
                    }else{
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'error'
                        ).then(function() { 
                        });
                    } 
                }
            }); 
        });
    });



	function hapus(id) {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus',
			
        }).then((result) => {
			
            if (result.isConfirmed) {
				$.ajax({
                url: "<?php echo base_url();?>berita/Berita/delete",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,  
                success: function (data) {
                    $("#overlay").fadeOut(300);
                    if(data['status'] == true){
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'success'
                        ).then(function() { 
                            $(".TambahBerita").modal('hide');
                            userDataTable.draw(); 
                        }); 
                    }else{
                        Swal.fire(
                        `${data['message']}`, 
                        '',
                        'error'
                        ).then(function() { 
                        });
                    } 
                }
            }); 
                // Swal.fire({
                //     title: 'Berhasil',
                //     text: "Data berhasil dihapus",
                //     icon: 'success',
                //     confirmButtonColor: '#003A91',
                //     confirmButtonText: 'OK'
                // })
            }
        })
    }

    $("#HapusPolda").click(function() {

    })
</script>
