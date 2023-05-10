<!-- Page -->
<!-- <div class="kotak" style="border-style:solid ;"> -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">

<style>
          :root {
     --blue: #5e72e4;
     --indigo: #5603ad;
     --purple: #8965e0;
     --pink: #f3a4b5;
     --red: #f5365c;
     --orange: #fb6340;
     --yellow: #ffd600;
     --green: #2dce89;
     --teal: #11cdef;
     --cyan: #2bffc6;
     --white: #fff;
     --gray: #8898aa;
     --gray-dark: #32325d;
     --light: #ced4da;
     --lighter: #e9ecef;
     --primary: #5e72e4;
     --secondary: #f7fafc;
     --success: #2dce89;
     --info: #11cdef;
     --warning: #fb6340;
     --danger: #f5365c;
     --light: #adb5bd;
     --dark: #212529;
     --default: #172b4d;
     --white: #fff;
     --neutral: #fff;
     --darker: black;
     --breakpoint-xs: 0;
     --breakpoint-sm: 576px;
     --breakpoint-md: 768px;
     --breakpoint-lg: 992px;
     --breakpoint-xl: 1200px;
     --font-family-sans-serif: Open Sans, sans-serif;
     --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
     /* --shadow : rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; */
     --shadow : rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
     }

     *,
     *::before,
     *::after {
     box-sizing: border-box;
     }

     @-ms-viewport {
     width: device-width;
     }

     figcaption,
     footer,
     header,
     main,
     nav,
     section {
     display: block;
     }



     [tabindex='-1']:focus {
     outline: 0 !important;
     }

     h2,
     h5 {
     margin-top: 0;
     margin-bottom: .5rem;
     }

     p {
     margin-top: 0;
     margin-bottom: 1rem;
     }

     dfn {
     font-style: italic;
     }

     strong {
     font-weight: bolder;
     }

     a {
     text-decoration: none;
     color: #5e72e4;
     background-color: transparent;
     -webkit-text-decoration-skip: objects;
     }

     a:hover {
     text-decoration: none;
     color: #233dd2;
     }

     a:not([href]):not([tabindex]) {
     text-decoration: none;
     color: inherit;
     }

     a:not([href]):not([tabindex]):hover,
     a:not([href]):not([tabindex]):focus {
     text-decoration: none;
     color: inherit;
     }

     a:not([href]):not([tabindex]):focus {
     outline: 0;
     }

     caption {
     padding-top: 1rem;
     padding-bottom: 1rem;
     caption-side: bottom;
     text-align: left;
     color: #8898aa;
     }

     button {
     border-radius: 0;
     }

     button:focus {
     outline: 1px dotted;
     outline: 5px auto -webkit-focus-ring-color;
     }

     input,
     button {
     font-family: inherit;
     font-size: inherit;
     line-height: inherit;
     margin: 0;
     }

     button,
     input {
     overflow: visible;
     }

     button {
     text-transform: none;
     }

     button,
     [type='reset'],
     [type='submit'] {
     -webkit-appearance: button;
     }

     button::-moz-focus-inner,
     [type='button']::-moz-focus-inner,
     [type='reset']::-moz-focus-inner,
     [type='submit']::-moz-focus-inner {
     padding: 0;
     border-style: none;
     }

     input[type='radio'],
     input[type='checkbox'] {
     box-sizing: border-box;
     padding: 0;
     }

     input[type='date'],
     input[type='time'],
     input[type='datetime-local'],
     input[type='month'] {
     -webkit-appearance: listbox;
     }

     legend {
     font-size: 1.5rem;
     line-height: inherit;
     display: block;
     width: 100%;
     max-width: 100%;
     margin-bottom: .5rem;
     padding: 0;
     white-space: normal;
     color: inherit;
     }

     [type='number']::-webkit-inner-spin-button,
     [type='number']::-webkit-outer-spin-button {
     height: auto;
     }

     [type='search'] {
     outline-offset: -2px;
     -webkit-appearance: none;
     }

     [type='search']::-webkit-search-cancel-button,
     [type='search']::-webkit-search-decoration {
     -webkit-appearance: none;
     }

     ::-webkit-file-upload-button {
     font: inherit;
     -webkit-appearance: button;
     }

     [hidden] {
     display: none !important;
     }

     h2,
     h5,
     .h2,
     .h5 {
     font-family: inherit;
     font-weight: 600;
     line-height: 1.5;
     margin-bottom: .5rem;
     color: #32325d;
     }

     h2,
     .h2 {
     font-size: 1.25rem;
     }

     h5,
     .h5 {
     font-size: .8125rem;
     }

     .container-fluid {
     width: 100%;
     margin-right: auto;
     margin-left: auto;
     padding-right: 15px;
     padding-left: 15px;
     }

     .row {
     display: flex;
     margin-right: -15px;
     margin-left: -15px;
     flex-wrap: wrap;
     }

     .col,
     .col-auto,
     .col-lg-6,
     .col-xl-3,
     .col-xl-6 {
     position: relative;
     width: 100%;
     min-height: 1px;
     padding-right: 15px;
     padding-left: 15px;
     }

     .col {
     max-width: 100%;
     flex-basis: 0;
     flex-grow: 1;
     }

     .col-auto {
     width: auto;
     max-width: none;
     flex: 0 0 auto;
     }

     @media (min-width: 992px) {
     .col-lg-6 {
     max-width: 50%;
     flex: 0 0 50%;
     }
     }

     @media (min-width: 1200px) {
     .col-xl-3 {
     max-width: 25%;
     flex: 0 0 25%;
     }
     .col-xl-6 {
     max-width: 50%;
     flex: 0 0 50%;
     }
     }

     .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     border: 1px solid rgba(0, 0, 0, .05);
     border-radius: .375rem;
     background-color: #fff;
     background-clip: border-box;

     }

     .card-body {
     padding: 1.5rem;
     flex: 1 1 auto;
     box-shadow: var(--shadow);

     }

     .card-title {
     margin-bottom: 1.25rem;
     }



     .bg-info {
     background-color: #11cdef !important;
     }

     a.bg-info:hover,
     a.bg-info:focus,
     button.bg-info:hover,
     button.bg-info:focus {
     background-color: #0da5c0 !important;
     }

     .bg-warning {
     background-color: #fb6340 !important;
     }

     a.bg-warning:hover,
     a.bg-warning:focus,
     button.bg-warning:hover,
     button.bg-warning:focus {
     background-color: #fa3a0e !important;
     }

     .bg-danger {
     background-color: #f5365c !important;
     }

     a.bg-danger:hover,
     a.bg-danger:focus,
     button.bg-danger:hover,
     button.bg-danger:focus {
     background-color: #ec0c38 !important;
     }

     .bg-default {
     background-color: #172b4d !important;
     }

     a.bg-default:hover,
     a.bg-default:focus,
     button.bg-default:hover,
     button.bg-default:focus {
     background-color: #0b1526 !important;
     }

     .rounded-circle {
     border-radius: 50% !important;
     }

     .align-items-center {
     align-items: center !important;
     }

     @media (min-width: 1200px) {
     .justify-content-xl-between {
     justify-content: space-between !important;
     }
     }

     .shadow {
     box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
     }

     .mb-0 {
     margin-bottom: 0 !important;
     }

     .mr-2 {
     margin-right: .5rem !important;
     }

     .mt-3 {
     margin-top: 1rem !important;
     }

     .mb-4 {
     margin-bottom: 1.5rem !important;
     }

     .mb-5 {
     margin-bottom: 3rem !important;
     }

     .pt-5 {
     padding-top: 3rem !important;
     }

     .pb-8 {
     padding-bottom: 8rem !important;
     }

     .m-auto {
     margin: auto !important;
     }

     @media (min-width: 768px) {
     .pt-md-8 {
     padding-top: 8rem !important;
     }
     }

     @media (min-width: 1200px) {
     .mb-xl-0 {
     margin-bottom: 0 !important;
     }
     }

     .text-nowrap {
     white-space: nowrap !important;
     }

     .text-center {
     text-align: center !important;
     }

     .text-uppercase {
     text-transform: uppercase !important;
     }

     .font-weight-bold {
     font-weight: 600 !important;
     }

     .text-white {
     color: #fff !important;
     }

     .text-success {
     color: #2dce89 !important;
     }

     a.text-success:hover,
     a.text-success:focus {
     color: #24a46d !important;
     }

     .text-warning {
     color: #fb6340 !important;
     }

     a.text-warning:hover,
     a.text-warning:focus {
     color: #fa3a0e !important;
     }

     .text-danger {
     color: #f5365c !important;
     }

     a.text-danger:hover,
     a.text-danger:focus {
     color: #ec0c38 !important;
     }

     .text-white {
     color: #fff !important;
     }

     a.text-white:hover,
     a.text-white:focus {
     color: #e6e6e6 !important;
     }

     .text-muted {
     color: #8898aa !important;
     }

     @media print {
     *,
     *::before,
     *::after {
     box-shadow: none !important;
     text-shadow: none !important;
     }
     a:not(.btn) {
     text-decoration: underline;
     }
     p,
     h2 {
     orphans: 3;
     widows: 3;
     }
     h2 {
     page-break-after: avoid;
     }
      page {
     size: a3;
     }
     body {
     min-width: 992px !important;
     }
     }

     figcaption,
     main {
     display: block;
     }

     main {
     overflow: hidden;
     }

     .bg-yellow {
     background-color: #ffd600 !important;
     }

     a.bg-yellow:hover,
     a.bg-yellow:focus,
     button.bg-yellow:hover,
     button.bg-yellow:focus {
     background-color: #ccab00 !important;
     }

     .bg-gradient-primary {
     background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
     }

     .bg-gradient-primary {
     background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
     }

     @keyframes floating-lg {
     0% {
     transform: translateY(0px);
     }
     50% {
     transform: translateY(15px);
     }
     100% {
     transform: translateY(0px);
     }
     }

     @keyframes floating {
     0% {
     transform: translateY(0px);
     }
     50% {
     transform: translateY(10px);
     }
     100% {
     transform: translateY(0px);
     }
     }

     @keyframes floating-sm {
     0% {
     transform: translateY(0px);
     }
     50% {
     transform: translateY(5px);
     }
     100% {
     transform: translateY(0px);
     }
     }

     [class*='shadow'] {
     transition: all .15s ease;
     }

     .text-sm {
     font-size: .875rem !important;
     }

     .text-white {
     color: #fff !important;
     }

     a.text-white:hover,
     a.text-white:focus {
     color: #e6e6e6 !important;
     }

     [class*='btn-outline-'] {
     border-width: 1px;
     }

     .card-stats .card-body {
     padding: 1rem 1.5rem;
     }

     .main-content {
     position: relative;
     }

     @media (min-width: 768px) {
     .main-content .container-fluid {
     padding-right: 39px !important;
     padding-left: 39px !important;
     }
     }

     .footer {
     padding: 2.5rem 0;
     background: #f7fafc;
     }

     .footer .copyright {
     font-size: .875rem;
     }

     .header {
     position: relative;
     }

     .icon {
     width: 3rem;
     height: 3rem;
     }

     .icon i {
     font-size: 2.25rem;
     }

     .icon-shape {
     display: inline-flex;
     padding: 12px;
     text-align: center;
     border-radius: 50%;
     align-items: center;
     justify-content: center;
     }

     .icon-shape i {
     font-size: 1.25rem;
     }

     @media (min-width: 768px) {
     /* @ keyframes show-navbar-dropdown {
     0% {
          transition: visibility .25s, opacity .25s, transform .25s;
          transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
          opacity: 0;
     }
     100% {
          transform: translate(0, 0);
          opacity: 1;
     } */
     }
     @keyframes hide-navbar-dropdown {
     from {
          opacity: 1;
     }
     to {
          transform: translate(0, 10px);
          opacity: 0;
     }
     }


     @keyframes show-navbar-collapse {
     0% {
     transform: scale(.95);
     transform-origin: 100% 0;
     opacity: 0;
     }
     100% {
     transform: scale(1);
     opacity: 1;
     }
     }

     @keyframes hide-navbar-collapse {
     from {
     transform: scale(1);
     transform-origin: 100% 0;
     opacity: 1;
     }
     to {
     transform: scale(.95);
     opacity: 0;
     }
     }

     p {
     font-size: 1rem;
     font-weight: 300;
     line-height: 1.7;
     }


.card {
    border: none;
    border-radius: 10px !important;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;;
}


.c-details span {
    font-weight: 300;
    font-size: 15px
}

.icon {
    width: 50px;
    height: 50px;
    background-color: #eee;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 39px
}

.icon2{
     background-color: #01796f !important;

}

.icon2 i{
     color: #fff !important;
}

.icon i{
     font-size: 27px;
     color: #01796f;
}

.badge span {
    background-color: #01796f;
    width: 70px;
    height: 25px;
    padding-bottom: 3px;
    border-radius: 5px;
    display: flex;
    color: #fff;
    justify-content: center;
    align-items: center
}

.badag{
     color: #01796f;


}

.penumpang{
     min-height: 35vh;
}


</style>
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> -->


<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/'; margin-left:-15px; ">
    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="#"><?= $title; ?> - Data Statistik Perjalanan Masyarakat Pengguna Jalan Secara Real Time Untuk Memantau Kondisi Lalu Lintas </a></li>
        <!-- <li class="breadcrumb-item"><a href="#"><?= $title; ?> </a></li> -->
    </ol>
</nav>
<!-- </div> -->
<div class="page">

    <div class="row align-items-center justify-content-between mb-2">
        <div class="col-md-4">
            <h3>Filter Data Monitoring</h3>
            <div class="cat" style="padding: 0;margin:0">
                <label>
                    <input checked type="radio" value="now" name="filter" id="nowDisplay"><span> Saat ini</span>
                </label>
            </div>
            <div class="cat" style="padding: 0;margin:0">
                <label>
                    <input type="radio" value="today" name="filter" id="todayDisplay"><span> Hari ini</span>
                </label>
            </div>
            <div class="cat" style="padding: 0;margin:0">
                <label>
                    <input type="radio" value="week" name="filter" id="weekDisplay"><span> Minggu ini</span>
                </label>
            </div>
            <div class="cat" style="padding: 0;margin:0">
                <label>
                    <input type="radio" value="month" name="filter" id="monthDisplay"><span> Bulan ini</span>
                </label>
            </div>
            <div class="cat" style="padding: 0;margin:0">
                <label>
                    <input type="radio" value="year" name="filter" id="yearDisplay"><span> Tahun ini</span>
                </label>
            </div>
        </div>
        <div class="col-md-8 float-right">
            <!-- <button type="button" class="btn btn-primary btn-lg" id="jml_tripon"></button> -->
            <!-- <button type="button" class="btn btn-primary btn-lg" id="jml_penumpang"></button>
            <button type="button" class="btn btn-primary btn-lg" id="jml_kendaraan"></button>
            <button type="button" class="btn btn-primary btn-lg" id="jml_keberangkatan"></button>
            <button type="button" class="btn btn-primary btn-lg" id="jml_kedatangan"></button> -->
        </div>
    </div>




    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <div class="material-selectfield">
                            <div class="material-textfield">
                                <input type="date" name="start_date" id="start_date" style="width:100% ;">
                                <label class="labelmui">Filter tanggal mulai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="material-selectfield">
                            <div class="material-textfield">
                                <input type="date" name="end_date" id="end_date" style="width:100% ;">
                                <label class="labelmui">Filter tanggal selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary mt-3" type="button" id="btn_pilih">Tampilkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="header-body">
     <div class="row">
          <div class="col-md-3 ">
                              <div class="card ">
                                   <div class="card-body">
                                        <!-- <h5 class="card-title"><?php echo $data['getDetail']['data']['society']['person_name']; ?></h5>
                                        <p class="card-text">Nik. <?php echo $data['getDetail']['data']['society']['nik']; ?></p> -->
                                        <div class="d-flex justify-content-between">
                                             <div class="d-flex flex-row align-items-center">
                                             <div class="icon icon2"> <i class="fa-solid fa-user"></i> </div>
                                             <div class="ms-2 c-details">
                                                  <span >Jumlah Pengguna</span>
                                                  <h4 class="mb-0" id="jml_tripon"></h4>
                                             </div>
                                             </div>
                                        </div>

                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 ">
                              <div class="card ">
                                   <div class="card-body">

                                        <div class="d-flex justify-content-between">
                                             <div class="d-flex flex-row align-items-center">
                                             <div class="icon icon2"> <i class="fa-solid fa-car"></i> </div>
                                             <div class="ms-2 c-details">
                                                  <span> Jumlah Kendaraan</span>
                                                  <h4 class="mb-0" id="jml_kendaraan"></h4>
                                             </div>
                                             </div>
                                        </div>

                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 ">
                              <div class="card ">
                                   <div class="card-body">

                                        <div class="d-flex justify-content-between">
                                             <div class="d-flex flex-row align-items-center">
                                             <div class="icon icon2"> <i class="fa-solid fa-location-arrow"></i> </div>
                                             <div class="ms-2 c-details">
                                                  <span> Jumlah Keberangkatan</span>
                                                  <h4 class="mb-0" id="jml_keberangkatan"></h4>
                                             </div>
                                             </div>
                                        </div>

                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 ">
                              <div class="card ">
                                   <div class="card-body">

                                        <div class="d-flex justify-content-between">
                                             <div class="d-flex flex-row align-items-center">
                                             <div class="icon icon2"> <i class="fa-solid fa-map-pin"></i> </div>
                                             <div class="ms-2 c-details">
                                                  <span> Jumlah Kedatangan</span>
                                                  <h4 class="mb-0" id="jml_kedatangan"></h4>
                                             </div>
                                             </div>
                                        </div>

                                   </div>
                              </div>
                         </div>
          <!-- <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                         <div class="row ">
                              <div class="col">
                                   <h5 class="card-title text-uppercase text-muted mb-0">JUMLAH PENGGUNA
                                   </h5>
                                   <h2 class="h2 font-weight-bold mb-0 mt-3" id="jml_tripon"></h2>
                              </div>
                              <div class="col-auto">
                                   <div
                                        class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-user"></i>
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div>

          <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                         <div class="row">
                              <div class="col">
                                   <h5 class="card-title text-uppercase text-muted mb-0">JUMLAH KENDARAAN</h5>
                                   <h2 class="h2 font-weight-bold mb-0 mt-3" id="jml_kendaraan"></h2>
                              </div>
                              <div class="col-auto">
                                   <div
                                   class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                   <i class="fas fa-car"></i>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </div>
     <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                         <div class="row">
                              <div class="col">
                                   <h5 class="card-title text-uppercase text-muted mb-0">JUMLAH KEBERANGKATAN
                                   </h5>
                                   <h2 class="h2 font-weight-bold mb-0 mt-3" id="jml_keberangkatan">%</h2>
                              </div>
                              <div class="col-auto">
                                   <div
                                        class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-location-arrow"></i>
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div>

          <div class="col-xl-3 col-lg-6">
               <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                         <div class="row">
                              <div class="col">
                                   <h5 class="card-title text-uppercase text-muted mb-0">JUMLAH KEDATANGAN
                                   </h5>
                                   <h2 class="h2 font-weight-bold mb-0 mt-3" id="jml_kedatangan">%</h2>
                              </div>
                              <div class="col-auto">
                                   <div
                                        class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-location-arrow"></i>
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div> -->
     </div>
</div>
<br>

    <div class="card p-3" style="display:none">
        <div class="row mb-2 align-items-center">
            <div class="col-md-1">
                <div class="form-group">
                    <div class="form-group">
                        <label for="kode_prov_start">Provinsi awal</label>
                        <select class="form-control" id="kode_prov_start" name="kode_prov_start">
                            <option value="0">-Pilih Provinsi awal-</option>
                            <?php foreach ($data['getProv'] as $key) : ?>
                                <option value="<?= $key['kode'] ?>"><?= $key['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <div class="form-group">
                        <label for="kode_prov_end">Provinsi akhir</label>
                        <select class="form-control" id="kode_prov_end" name="kode_prov_end">
                            <option value="0">-Pilih Provinsi akhir-</option>
                            <?php foreach ($data['getProv'] as $key) : ?>
                                <option value="<?= $key['kode'] ?>"><?= $key['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="start_date">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Example input placeholder">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="end_date">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Example input placeholder">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="start_time">Jam Mulai</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" placeholder="Example input placeholder">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="end_time">Jam Selesai</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" placeholder="Example input placeholder">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <button class="btn btn-primary mt-4" type="button" id="btn_filter">Tampilkan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5>DATA KEBERANGKATAN PER KECAMATAN</h5>
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <select class="form-control" id="limit_showData">
                                <option value="34" selected>6 Kecamatan</option>
                                <!-- <option value="3">3 </option>
                                <option value="5">5</option>
                                <option value="7">7</option>
                                <option value="10">10</option> -->
                            </select>

                        </div>
                        <!-- <div class="col-md-1">
                            <label for="staticEmail" class="form-label">Tampilkan</label>
                        </div> -->
                    </div>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5 class="mb-5">DATA KEDATANGAN PER KECAMATAN</h5>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5>DATA KEDATANGAN PER KECAMATAN</h5>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5>DATA MONITORING</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Jenis Kendaraan</p>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
                    <h5>DATA MONOTORING</h5>
                    <p class="fw-bold" style="text-transform:capitalize">Per Model Kendaraan</p>
                </div>
                <div class="card-body m-0 p-0">
                    <div class="main-chart">
                        <div id="chart6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="display: none;">
        <div class="card-header bg-primary ">
            <h5 class="modal-title text-white">Filter</h5>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="" placeholder="" type="text">
                            <label class="labelmui">Kota Awal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-textfield">
                            <input style="width: 100%;" name="" placeholder="" type="text">
                            <label class="labelmui">Kota Tujuan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="material-btnfield">
                            <button type="button" class="btn btn-primary" style="width:100%;" onclick="BtnFilter()">Terapkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-sm-12" id="FilterTripOn"></div>


    <div class="card">
        <div class="card-header bg-transparent border-bottom text-uppercase m-3 p-0 pb-2">
            <h5>DATA SELURUH PENGAWASAN</h5>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-striped dt-responsive  nowrap w-100">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal Perjalanan</th>
                        <th>Waktu Perjalanan</th>
                        <th>Jarak (KM)</th>
                        <th>Durasi Perjalanan</th>
                        <th>Nama Pengemudi</th>
                        <th>Nomor Registrasi</th>
                        <th>Jumlah Penumpang</th>
                        <th>Jenis Kendaraan</th>
                        <th>Model Kendaraan</th>
                        <th>Lokasi Asal</th>
                        <th>Lokasi Tujuan</th>
                        <th>Informasi Lebih Lanjut</th>
                    </tr>
                </thead>

            </table>

        </div>
    </div>
</div>

                         <!-- <table id="table" class="table table-striped align-middle" style="width:100%">
 						<div id="Filter">
 							<h5><img src="<?php echo base_url(); ?>assets/images/filter.jpg" alt=""> Filter</h5>
 						</div>
 						<br><br>
 						<thead>
 							<tr class="text-center ">
 								<th>No</th>
 								<th>Tanggal Perjalanan</th>
 								<th>Nama Pengemudi</th>
 								<th>Nomor Registrasi</th>
 								<th>Jumlah Penumpang</th>
 								<th>Jenis Kendaraan</th>
 								<th>Lokasi Asal</th>
 								<th>Lokasi Tujuan</th>
 								<th>Detail</th>
 							</tr>
 						</thead>
 						<tbody>



 						</tbody>


 					</table> -->

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<!-- End Page -->



<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $("#overlay").fadeIn(300);
        userDataTable = $('#dataTable').DataTable({

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

                url: '<?php echo base_url(); ?>ngawas/Ngawas/serverSideTable',

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
                    data: 'id',
                    "width": '2%'
                },
                {
                    data: 'date_departure',
                    "width": '2%'
                },
                {
                    data: 'time_departure',
                    "width": '2%'
                },
                {
                    data: 'distance',
                    "width": '5%'
                },
                {
                    data: 'duration',
                    "width": '5%'
                },
                {
                    data: 'person_name',
                    "width": '5%'
                },
                {
                    data: 'no_vehicle',
                    "width": '5%'
                },
                {
                    data: 'penumpang',
                    "width": '2%'
                },
                {
                    data: 'type_vehicle',
                    "width": '5%'
                },
                {
                    data: 'brand_vehicle',
                    "width": '5%'
                },
                {
                    data: 'location_start',
                    "width": '5%'
                },
                {
                    data: 'location_end',
                    "width": '5%'
                },

                // {
                //     data: 'passenger'
                // },
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

        let filter = true;
        let time = true;
        let topNgawas = true;
        let limit = $('#limit_showData').val()
        let start_time = moment().format('H:00:00');
        let end_time = moment().add(3, 'hours').format('H:00:00')
        let start_date = moment().format('YYYY-MM-DD');
        let end_date = moment().format('YYYY-MM-DD');
        $('#start_date').attr('type', 'time')
        $('#end_date').attr('type', 'time')

        getPieNgawas(filter, time, start_time, end_time, start_date, end_date);
        getChartProv(filter, time, start_time, end_time, start_date, end_date, limit);
        getStatistikNgawas(filter, time, start_time, end_time, start_date, end_date)
        getModelKendaraan(filter, time, start_time, end_time, start_date, end_date)


    });


    $("[name=filter]").on("change", function(e) {

        var tanggal;
        var isitype = 'day';
        let filter = true;
        let time = true;

        const date = new Date();
        let limit = $('#limit_showData').val()


        let today = moment().format('YYYY-MM-DD');
        let start_time = moment().format('H:00:00');
        let end_time = moment().add(3, 'hours').format('H:00:00')

        let start_week = moment().clone().startOf('week').format('YYYY-MM-DD')
        let end_week = moment().clone().endOf('week').format('YYYY-MM-DD')


        let start_month = moment().startOf('month').format('YYYY-MM-DD')
        let end_month = moment().endOf('month').format('YYYY-MM-DD');

        let start_year = moment().startOf('year').format('YYYY-MM-DD')
        let end_year = moment().endOf('year').format('YYYY-MM-DD');

        if (this.value == 'now') {
            $('#start_date').attr('type', 'time')
            $('#end_date').attr('type', 'time')
            getChartProv(filter, time, start_time, end_time, today, today, limit);
            getPieNgawas(filter, time, start_time, end_time, today, today);
            getStatistikNgawas(filter, time, start_time, end_time, today, today);
            getModelKendaraan(filter, time, start_time, end_time, today, today);

        } else if (this.value == 'today') {
            $('#start_date').attr('type', 'date')
            $('#end_date').attr('type', 'date')
            getChartProv(filter, time = false, start_time = null, end_time = null, today, today, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, today, today);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, today, today);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, today, today);


        } else if (this.value == 'week') {
            $('#start_date').attr('type', 'date')
            $('#end_date').attr('type', 'date')
            getChartProv(filter, time = false, start_time = null, end_time = null, start_week, end_week, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_week, end_week);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_week, end_week);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_week, end_week);


        } else if (this.value == 'month') {
            $('#start_date').attr('type', 'month')
            $('#end_date').attr('type', 'month')
            getChartProv(filter, time = false, start_time = null, end_time = null, start_month, end_month, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_month, end_month);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_month, end_month);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_month, end_month);



        } else if (this.value == 'year') {
            $('#start_date').attr('type', 'month')
            $('#end_date').attr('type', 'month')
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_year, end_year);

            getChartProv(filter, time = false, start_time = null, end_time = null, start_year, end_year, limit);
        }
        // //  console.log(tanggal);
        // // console.log(tanggal[0]);
        // getStatistik();
    });


    $('#btn_pilih').on('click', function(e) {
        e.preventDefault();
        var type_filter = $("[name=filter]:checked").val();
        let filter = true;
        let time = true;
        let limit = $('#limit_showData').val()

        if (type_filter == 'now') {
            let start_time = $('#start_date').val();
            let end_time = $('#end_date').val();
            let today = moment().format('YYYY-MM-DD');
            getChartProv(filter, time, start_time, end_time, today, today, limit);
            getPieNgawas(filter, time, start_time, end_time, today, today);
            getStatistikNgawas(filter, time, start_time, end_time, today, today);
            getModelKendaraan(filter, time, start_time, end_time, today, today);
        } else if (type_filter == 'today') {
            let start_date = $('#start_date').val();
            let end_date = $('#end_date').val();
            getChartProv(filter, time = false, start_time = null, end_time = null, start_date, end_date, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, today, today);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, today, today);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, today, today);
        } else if (type_filter == 'week') {
            let start_week = $('#start_date').val();
            let end_week = $('#end_date').val();
            getChartProv(filter, time = false, start_time = null, end_time = null, start_week, end_week, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_week, end_week);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_week, end_week);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_week, end_week);
        } else if (type_filter == 'month') {
            let start_month = $('#start_date').val();
            let end_month = $('#end_date').val();
            getChartProv(filter, time = false, start_time = null, end_time = null, start_month, end_month, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_month, end_month);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_month, end_month);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_month, end_month);
        } else if (type_filter == 'year') {
            let start_year = $('#start_date').val();
            let end_year = $('#end_date').val();
            getChartProv(filter, time = false, start_time = null, end_time = null, start_year, end_year, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_year, end_year);
        }
    })


    $('#limit_showData').on('change', function() {

        let filter = true;
        let time = true;
        var limit = $('#limit_showData').val();
        var type_filter = $("[name=filter]:checked").val();

        let today = moment().format('YYYY-MM-DD');
        let start_time = moment().format('H:00:00');
        let end_time = moment().add(3, 'hours').format('H:00:00')

        let start_week = moment().clone().startOf('week').format('YYYY-MM-DD')
        let end_week = moment().clone().endOf('week').format('YYYY-MM-DD')


        let start_month = moment().startOf('month').format('YYYY-MM-DD')
        let end_month = moment().endOf('month').format('YYYY-MM-DD');

        let start_year = moment().startOf('year').format('YYYY-MM-DD')
        let end_year = moment().endOf('year').format('YYYY-MM-DD');

        if (type_filter == 'now') {
            getChartProv(filter, time, start_time, end_time, today, today, limit);
            getPieNgawas(filter, time, start_time, end_time, today, today);
            getStatistikNgawas(filter, time, start_time, end_time, today, today);
            getModelKendaraan(filter, time, start_time, end_time, today, today);
        } else if (type_filter == 'today') {
            getChartProv(filter, time = false, start_time = null, end_time = null, today, today, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, today, today);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, today, today);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, today, today);
        } else if (type_filter == 'week') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_week, end_week, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_week, end_week);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_week, end_week);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_week, end_week);
        } else if (type_filter == 'month') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_month, end_month, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_month, end_month);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_month, end_month);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_month, end_month);
        } else if (type_filter == 'year') {
            getChartProv(filter, time = false, start_time = null, end_time = null, start_year, end_year, limit);
            getPieNgawas(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getStatistikNgawas(filter, time = false, start_time = null, end_time = null, start_year, end_year);
            getModelKendaraan(filter, time = false, start_time = null, end_time = null, start_year, end_year);
        }

    })

    $('#btn_filter').on('click', function(e) {
        e.preventDefault()
        let limit = $('#limit_showData').val()

        let start_prov = $('#kode_prov_start').val();
        let end_prov = $('#kode_prov_end').val();

        let start_date = $('#start_date').val();
        let end_date = $('#end_date').val();

        let start_time = $('#start_time').val();
        let end_time = $('#end_time').val();

        let time = false;
        let filter = false;

        if ((start_date != '' && end_date == '') || (start_date == '' && end_date != '')) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai dan waktu akhir harus terisi!',
            })
        } else if (start_date > end_date) {
            Swal.fire({
                icon: 'error',
                title: 'Waktu mulai tidak boleh melewati waktu akhir!',
            })
        }
        // $.ajax({
        //     url: "<?= base_url() ?>tripon/getFilter",
        //     type: 'POST',
        //     data: {
        //         limit,
        //         filter,
        //         time,
        //         start_date,
        //         end_date,
        //         start_time,
        //         end_time
        //     },
        //     dataType: 'JSON',
        //     success: function(result) {

        //     }
        // })

    })


    function getChartProv(filter = null, time = null, start_time = null, end_time = null, start_date = null, end_date = null, limit = null) {
        $.ajax({
            url: "<?= base_url() ?>ngawas/ngawas_prov",
            type: 'POST',
            data: {
                limit,
                filter,
                time,
                start_date,
                end_date,
                start_time,
                end_time
            },
            dataType: "JSON",
            success: function(results) {
                $("#chart4").html(`<div id="keberangkatan"></div>`);
                $("#chart5").html(`<div id="kedatangan"></div>`);
                var keberangkatan = {
                    series: [{
                        name: 'Keberangkatan',
                        data: results.keberangkatan,
                        color: "#176646",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.provinsi,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var keberangkatan2 = new ApexCharts(document.querySelector("#keberangkatan"), keberangkatan);
                keberangkatan2.render();



                var kedatangan = {
                    series: [{
                        name: 'Kedatangan',
                        data: results.kedatangan,
                        color: "#01796f",
                    }],
                    chart: {
                        type: 'bar',
                        height: 380
                    },
                    tooltip: {
                        fixed: {
                            enabled: true
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '40%',
                            endingShape: 'circle',
                            dataLabels: {
                                position: 'top'
                            }
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#333']
                        },
                        offsetY: -15
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: results.provinsi,
                        labels: {
                            show: true,
                            rotate: -45,
                            rotateAlways: false,
                            hideOverlappingLabels: true,
                            showDuplicates: false,
                            trim: false,
                            minHeight: undefined,
                            maxHeight: 120,
                            style: {
                                // color: '#000000',
                                fontSize: '12px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                fontWeight: 'bold',
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },

                    fill: {
                        opacity: 1
                    },

                };

                var kedatangan2 = new ApexCharts(document.querySelector("#kedatangan"), kedatangan);
                kedatangan2.render();
            }
        })
    }

    function getPieNgawas(filter = null, time = null, start_time = null, end_time = null, start_date = null, end_date = null) {

        $.ajax({
            url: "<?= base_url() ?>ngawas/getTipe_Kendaraan",
            type: 'POST',
            data: {
                filter,
                time,
                start_date,
                end_date,
                start_time,
                end_time
            },
            dataType: "JSON",
            success: function(results) {
                $("#chart3").html(`<div id="chartkendaraan"></div>`);
                var options_ngawas_kendaraan = {
                    series: results.jumlah,
                    chart: {
                        height: 380,
                        type: 'pie',
                    },
                    labels: results.type,
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var ngawas_kendaraan = new ApexCharts(document.querySelector("#chartkendaraan"), options_ngawas_kendaraan);
                ngawas_kendaraan.render();
            }
        })
    }


    function getStatistikNgawas(filter = null, time = null, start_time = null, end_time = null, start_date = null, end_date = null) {
        $.ajax({
            url: "<?= base_url() ?>ngawas/getStatistik",
            type: 'POST',
            data: {
                filter,
                time,
                start_date,
                end_date,
                start_time,
                end_time
            },
            dataType: "JSON",
            success: function(results) {
                $('#jml_tripon').text(`${results.jumlah_tripon}`)
                $('#jml_penumpang').text(`${results.jumlah_penumpang}`)
                $('#jml_kendaraan').text(`${results.jumlah_kendaraan}`)
                $('#jml_kedatangan').text(`${results.jumlah_kedatangan}`)
                $('#jml_keberangkatan').text(`${results.jumlah_keberangkatan}`)
               //  $('#jml_keberangkatan').text(`keberangkatan : ${results.jumlah_keberangkatan}`)
            }
        })
    }


    function getModelKendaraan(filter = null, time = null, start_time = null, end_time = null, start_date = null, end_date = null) {
        $.ajax({
            url: "<?= base_url() ?>ngawas/getModelKendaraan",
            type: 'POST',
            data: {
                filter,
                time,
                start_date,
                end_date,
                start_time,
                end_time
            },
            dataType: "JSON",
            success: function(results) {
                $("#chart6").html(`<div id="modelkendaraan"></div>`);
                var options = {
                    series: [{
                        name: 'Jumlah model kendaraan',
                        data: results.jumlah
                    }],
                    chart: {
                        type: 'bar',
                        height: 370
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            horizontal: true,
                        }
                    },
                    tooltip: {
                        enabled: true,
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#ffffff']
                        },
                        offsetY: 0,
                        offsetX: -15
                    },
                    xaxis: {
                        categories: results.type
                    }
                };

                var chart = new ApexCharts(document.querySelector("#modelkendaraan"), options);
                chart.render();
            }
        })
    }
</script>