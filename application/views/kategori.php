<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/animate.css">

	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/aos.css">

	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url('assets/feliciano')?>/css/style.css">
</head>

<body>
	<div class="py-1 bg-black top">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-phone2"></span></div>
							<span class="text">+ 1235 2355 98</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
									class="icon-paper-plane"></span></div>
							<span class="text">youremail@email.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
							<p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span>
								<span>8:00AM - 9:00PM</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><?= $konfig->judul_website; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu">Menu</span>
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?= base_url()?>" class="nav-link">Home</a></li>
					<?php foreach ($kategori as $kate) {?>
					<li class="nav-item active"><a href="<?= base_url('home/kategori/'.	$kate['id_kategori'])?>" class="nav-link">
					<?= $kate['nama_kategori'] ?></a></li>
					<?php }?>
					<!-- <li class="nav-item">
						<a href="#" class="nav-link">About
						</a>
					</li> -->
					
					<li class="nav-item cta">
						<a href="<?= base_url('auth/login') ?>" class="nav-link md-5"
							style="border-radius: 25px;">Log-in</a>
					</li>


				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->


	<section class="ftco-section">
  <div class="container">
    <!-- Menampilkan Judul Kategori -->
    <div class="col-12 text-center mb-5">
      <h1 class="fw-bold" style="font-size: 2.5rem; color: #333;"><?= $nama_kategori; ?></h1>
    </div>

    <!-- Konten untuk Kategori -->
    <div class="row gy-4">
      <?php foreach ($konten as $uu) { ?>
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm rounded overflow-hidden" style="margin: 15px;">
            <!-- Bagian Gambar -->
            <div class="position-relative">
              <img src="<?= base_url('assets/upload/konten/') . $uu['foto'] ?>" 
                   alt="<?= $uu['judul'] ?>" 
                   class="img-fluid w-100" 
                   style="height: 250px; object-fit: cover;">
              <span class="price position-absolute fw-bold bg-primary text-white py-1 px-3 rounded" style="top: 10px; left: 10px;">Rp.<?= $uu['Harga'] ?>K</span>
            </div>
            <!-- Bagian Teks -->
            <div class="card-body">
              <h4 class="fw-bold mb-3" style="text-align: center;"><?= $uu['judul'] ?></h4>
              <div class="d-flex justify-content-end">
			  <a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" 
                   class="btn btn-sm btn-primary rounded-pill px-4" style="text-align: center;">
                  Baca Selengkapnya
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<style>
/* Menambahkan gaya untuk memastikan ukuran foto seragam */
.img-fluid {
  width: 100%; /* Mengisi lebar penuh kolom */
  height: 250px; /* Tinggi tetap untuk semua gambar */
  object-fit: cover; /* Memastikan gambar dipotong proporsional */
  border-top-left-radius: 10px; /* Menyesuaikan dengan sudut card */
  border-top-right-radius: 10px;
}

.card {
  border-radius: 10px; /* Sudut membulat untuk konsistensi desain */
}
</style>








	



<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2"><?= $konfig->judul_website; ?></h2>
						<p><?= $konfig->profil_website; ?></p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="<?= $konfig->facebook; ?>"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="<?= $konfig->instagram; ?>"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
<style>
		.contact-item {
    margin-bottom: 20px;
}

.contact-item h5 {
    font-size: 1.5rem; /* Ukuran judul sedang */
    margin-bottom: 10px; /* Menjaga jarak dengan teks */
}

.d-flex h4 {
    font-size: 1.8rem; /* Ukuran ikon sedang */
    margin-right: 10px; /* Jarak antar ikon dan teks */
}

.pl-2 {
    padding-left: 10px;
}

.text-white {
    font-size: 1rem; /* Ukuran teks untuk Alamat/Email/WhatsApp */
}

</style>

<div class="contact-info">
    <div class="contact-item">
        <h5 class="text-primary mb-3">Contac Us</h5> <!-- Title -->
        
        <!-- Address Section -->
        <div class="d-flex">
            <h4 class="bi bi-geo-alt-fill text-info"></h4> <!-- Icon for Address -->
            <div class="pl-2">
                <h5 class="text-white">Alamat</h5>
                <p><?= $konfig->alamat; ?></p>
            </div>
        </div>

        <!-- Email Section -->
        <div class="d-flex mt-3">
            <h4 class="bi bi-envelope-fill text-info"></h4> <!-- Icon for Email -->
            <div class="pl-2">
                <h5 class="text-white">Email</h5>
                <p><?= $konfig->email; ?></p>
            </div>
        </div>

        <!-- WhatsApp Section -->
        <div class="d-flex mt-3">
            <h4 class="bi bi-whatsapp text-info"></h4> <!-- Icon for WhatsApp -->
            <div class="pl-2">
                <h5 class="text-white">WhatsApp</h5>
                <p><a href="https://wa.me/<?= $konfig->no_wa; ?>" target="_blank" class="text-info"><?= $konfig->no_wa; ?></a></p>
            </div>
        </div>
    </div>
</div>





				
				
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());

						</script> All rights reserved | This template is made with <i class="icon-heart"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Cihquilaa</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="<?= base_url('assets/feliciano')?>/js/jquery.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/popper.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/aos.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/jquery.timepicker.min.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/scrollax.min.js"></script>
	<script
		src="<?= base_url('assets/feliciano')?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url('assets/feliciano')?>/js/google-map.js"></script>
	<script src="<?= base_url('assets/feliciano')?>/js/main.js"></script>

</body>

</html>
