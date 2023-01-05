 <div class="container-fluid">
     <div class="section-title mt-5">
         <h2 class="text-center text-uppercase">Data Keseluruhan</h2>
     </div>

     <div class="row mt-5">
         <div class="col-md-6">
             <div class="card" style="background-color: #ff555b; border-radius:10px; color:#3b3b3b;">
                 <div class="card-body">
                     <div class="icon text-center">
                         <iconify-icon icon="bxs:car-crash" width="50"></iconify-icon>
                     </div>
                     <h4 class="text-center" style="color:#3b3b3b">Kecelakaan Lalu Lintas</h4>
                     <h1 id="lakalantas" class="text-center fw-bold text-black"></h1>
                     <div class="text-center mt-4">
                         <span class="fw-bold">Data Laka s.d</span> <br>
                         <span><?php echo format_indoHari(date('Y-m-d')) ?></span>

                     </div>
                 </div>
             </div>
         </div>
         <div class=" col-md-6">
             <div class="card" style="background-color: #fffd51; border-radius:10px; color:#3b3b3b">
                 <div class="card-body">
                     <div class="icon text-center">
                         <iconify-icon icon="ic:sharp-car-crash" width="50"></iconify-icon>
                     </div>
                     <h4 class="text-center" style="color:#3b3b3b">Pelanggaran Lalu Lintas</h4>
                     <h1 id="garlantas" class="text-center fw-bold text-black"></h1>
                     <div class="text-center mt-4">
                         <span>Data Dakgar s.d </span><br>
                         <span><?php echo format_indoHari(date('Y-m-d')) ?></span>
                     </div>
                 </div>
             </div>
         </div><!-- End Service Item -->
         <div class="col-md-6" data-aos="zoom-out">
             <div class="card" style="background-color: #40e48a; border-radius:10px; color:#3b3b3b">
                 <div class="card-body">
                     <div class="icon text-center">
                         <iconify-icon icon="mdi:car-multiple" width="50"></iconify-icon>
                         <iconify-icon icon="mdi:atv" width="50"></iconify-icon>
                     </div>
                     <h4 class="text-center" style="color:#3b3b3b">Kendaraan Bermotor</h4>
                     <h1 id="ranmor" class="text-center fw-bold text-black"></h1>
                     <div class="text-center mt-4">
                         <span>Data Ranmor s.d </span><br>
                         <span><?php echo format_indoHari(date('Y-m-d')) ?></span>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="card" style="background-color: #5a8cff; border-radius:10px; color:#3b3b3b">
                 <div class="card-body">
                     <div class="icon text-center">
                         <iconify-icon icon="mdi:card-account-details-outline" width="50"></iconify-icon>
                     </div>
                     <h4 class="text-center" style="color:#3b3b3b">SIM Nasional</h4>
                     </a></h4>
                     <h1 id="sim" class="text-center fw-bold text-black"></h1>
                     <div class="text-center mt-4">
                         <span>Data Sim s.d </span><br>
                         <span><?php echo format_indoHari(date('Y-m-d')) ?></span>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>

 <script>
     $('document').ready(function() {
         getStatistik();
     });

     function getStatistik() {
         $.ajax({
             type: "POST",
             url: "<?php echo base_url(); ?>statistik_nasional/Statistik_nasional/getStatistikKeseluruhan",
             dataType: "JSON",
             success: function(result) {
                 $('#garlantas').text(result.garlantas)
                 $('#lakalantas').text(result.lakalantas)
                 $('#ranmor').text(result.ranmor)
                 $('#sim').text(result.sim)

             }
         })
     }
 </script>