<div class="row">
	<div class="col-md-12">
		<div id="map" style="height: 500px; border-radius:25px;"></div>
	</div>



	<!-- statistik nasional -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<div class="col-md-12 mt-5">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-4 mb-3">
				<h4 style="text-transform: uppercase; color:#007DD8;">Statistik Nasional</h4>
			</div>
			<div class="col-md-3">
				<!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
				<!-- <p style="color: red; margin-bottom:0;"><?= ucwords('last update ' . date('j F, Y'))  ?></p> -->
			</div>
		</div>
		<div class="row">

			<!-- slider statistik nasional -->
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
							<div class="card-body">
								<div class="row justify-content-between align-items-center" style="height: 80px;">
									<div class="col-md-2">
										<i class='bx bxs-car-crash' style="font-size: 50px; color: #007DD8;"></i>
									</div>
									<div class="col-md-5">
										<h5 class="text-wrap fw-light text-black">Kecelakaan <br> Lalu Lintas</h5>
										<!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->
									</div>
									<div class="col-md-5 text-end">
										<h1 style="color: #007DD8;">123</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
							<div class="card-body">
								<div class="row justify-content-between align-items-center" style="height: 80px;">
									<div class="col-md-2">
										<iconify-icon icon="ic:round-car-crash" style="font-size: 50px; color: #007DD8;"></iconify-icon>
									</div>
									<div class="col-md-5">
										<h5 class="text-wrap fw-light text-black">Pelanggaran <br> Lalu Lintas</h5>

										<!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->

									</div>
									<div class="col-md-5 text-end">
										<h1 style="color: #007DD8;">123</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
							<div class="card-body">
								<div class="row justify-content-between align-items-center" style="height: 80px;">
									<div class="col-md-2">
										<iconify-icon icon="fa6-solid:motorcycle" style="font-size: 40px; color: #007DD8;"></iconify-icon>
									</div>
									<div class="col-md-5">
										<h5 class="text-wrap fw-light text-black">Kendaraan <br> Bermotor</h5>

										<!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->

									</div>
									<div class="col-md-5 text-end">
										<h1 style="color: #007DD8;">123</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card" style="border-radius: 20px !important; background-color:#D9D9D9">
							<div class="card-body">
								<div class="row justify-content-between align-items-center" style="height: 80px;">
									<div class="col-md-2">
										<i class='bx bxs-id-card' style="font-size: 50px; color: #007DD8;"></i>
									</div>
									<div class="col-md-5">
										<h5 class="text-wrap fw-light text-black">Jumlah SIM <br> Nasional</h5>

										<!-- <h3 class="text-white"><?= $data['pelanggaran']['jumlah'] ?></h3> -->

									</div>
									<div class="col-md-5 text-end">
										<h1 style="color: #007DD8;">123</h1>
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
			<!-- end slider -->

		</div>
	</div>
	<!-- end statistik -->
</div>

<hr style="border: 2px; color:#007DD8; opacity:100%;">

<div class="row justify-content-center">
	<div class="col-md-2">
		<a href="#"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8; text-transform:uppercase; font-weight: bold;">Ditgakkum</button></a>
	</div>
	<div class="col-md-2">
		<a href="#"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">test</button></a>
	</div>
	<div class="col-md-2">
		<a href="#"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">test</button></a>
	</div>
	<div class="col-md-2">
		<a href="#"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">test</button></a>
	</div>
	<div class="col-md-2">
		<a href="#"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">test</button></a>
	</div>
	<div class="col-md-2">
		<a href="#"><button class="btn btn-outline-primary" style="width: 200px; border-color:#007DD8;">test</button></a>
	</div>
</div>

<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
	var swiper = new Swiper(".mySwiper", {
		breakpoints: {
			1200: {
				slidesPerView: 4,
				spaceBetween: 10,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			576: {
				slidesPerView: 1,
				spaceBetween: 50,
			}
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>