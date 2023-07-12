<style>
    .modal{
        background-color:rgba(0, 0, 0, 0.30);
    }
</style>
<div class="page">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addModal" >
    Tambah
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Merek Kendaraan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" class="formAdd" method="post" enctype="multipart/form-data">
            <input type="hidden" name="<?= $csrf_name; ?>" value="<?= $csrf_token; ?>" style="display: none">
                <div class="mb-3">
                    <label for="brand" class="form-label">Nama Merek Kendaraan</label>
                    <input type="text" class="form-control" id="brand" name="brand">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
            </div>
        </div>
    </div>

    <div class="card col-5">
        <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
            <div class="row">
                    <h5>DATA Merek KENDARAAN</h5>
            </div>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-striped dt-responsive  nowrap w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Merek Kendaraan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        // $("#overlay").fadeIn(300);
        var fetchData = fetch("<?= base_url()?>ngawas/Ngawas/serverSideModel").then(
            response => response.json()
        ).then(
            data => {
                if(!data.length){
                    return
                }
                // console.log(data)

                var table = new DataTable('#dataTable', {
                    data : data.map(item => Object.values(item))
                })
            }
        )

        $(".formAdd").submit(function(e) {
            $("#overlay").fadeIn(300);
            e.preventDefault(); 
            var formData = new FormData($('.formAdd')[0]); 
            $.ajax({
                url: "<?php echo base_url();?>ngawas/ngawas/tambah",
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
                            $("#addModal").modal('hide');
                            location.reload(); 
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
                    url: "<?php echo base_url(); ?>ngawas/ngawas/delete",
                    type: "POST",
                    data: {
                        id: id
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        $("#overlay").fadeOut(300);
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                $("#addModal").modal('hide');
                                location.reload();
                            });
                        } else {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'error'
                            ).then(function() {});
                        }
                    }
                });
            }
        })
    }

</script>