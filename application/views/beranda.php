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
	<!-- <div class="py-1 bg-black top">
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
	</div> -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
				<div class="company-brand">
					<img src="<?= base_url('assets/feliciano')?>/images/logo2.png" alt="logo" class="footer-logo" style="transform: scale(1.7); width:70%;">
				</div>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">


    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link" style="font-size: 20px;">Home</a></li>
        <li class="nav-item active" ><a href="<?= base_url('home/menu') ?>" class="nav-link" style="font-size:20px;">Menu</a></li>

        <!-- Dropdown Kategori -->
		<li class="nav-item dropdown active">
			<a href="#" class="nav-link dropdown-toggle" id="kategoriDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px;">
				Kategori
			</a>
			<ul class="dropdown-menu" aria-labelledby="kategoriDropdown">
				<!-- Menu Home -->
				<li><a class="dropdown-item" href="<?= base_url('home') ?>">Home</a></li>

				<!-- Daftar Kategori -->
				<?php foreach ($kategori as $kate) { ?>
					<li><a class="dropdown-item" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
						<?= $kate['nama_kategori'] ?>
					</a></li>
				<?php } ?>
			</ul>
		</li>


        <!-- <li class="nav-item cta">
            <a href="<?= base_url('reservasi') ?>" class="nav-link md-5" style="border-radius: 23px; margin-right:10px;">Tambah Meja</a>
        </li> -->
        <li class="nav-item cta">
            <a href="<?= base_url('auth/login') ?>" class="btn btn-primary" style="padding: 15px 25px; font-size: 16px; border-radius: 25px; ">Log-in</a>
        </li>
    </ul>
</div>

		</div>
	</nav>
	<!-- END nav -->


			

	<section class="home-slider owl-carousel js-fullheight">

	<?php foreach($caraousel as $aa) { ?>
    <div class="slider-item js-fullheight" style="background-image: url(<?= base_url('assets/upload/caraousel/').$aa['foto'] ?>);">
        <div class="overlay-gradient" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                <div class="col-md-12 col-sm-12 text-center ftco-animate">
                    <span class="subheading" style="font-size: 4.5rem; color: #ffc107;">Restaurant</span>
                    <h1 class="mb-4" style="font-size: 3.5rem; color: #fff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Enak, Nyaman, Halal</h1>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>

    
</section>




	<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(<?= base_url('assets/feliciano')?>/images/cef2.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(<?= base_url('assets/feliciano')?>/images/cef3.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About</span>
	            <h2 class="mb-4">Restaurant</h2>
	          </div>
	          <p>"Restoran Nusantara hadir untuk memberikan pengalaman kuliner yang membawa Anda menjelajahi kekayaan rasa dari berbagai daerah Indonesia. 
				Dengan resep turun-temurun dan bahan-bahan lokal terbaik, kami berkomitmen untuk menyajikan hidangan otentik yang memadukan cita rasa tradisional dan modern. 
				Setiap sajian adalah perjalanan rasa yang memukau dan menggugah selera, menciptakan kenangan yang tak terlupakan bagi setiap pengunjung."</p>
						<pc class="time">
							<span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
							<span><a href="#">+ 62-878-7986-3565</a></span>
						</p>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-md-9">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Menus/Dish</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Staffs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 text-center text-md-left">
  <p>Restoran kami menyajikan ragam cita rasa dari seluruh pelosok Indonesia, di mana setiap hidangan membawa Anda merasakan kekayaan budaya kuliner Nusantara.</p>
</div>

        </div>
    	</div>
    </section>


	
	<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Catering Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Birthday Party</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Business Meetings</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Wedding Party</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    

	<section class="ftco-section">
    <div class="container">
	<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Menu</span>
					<h2 class="mb-4">Beragam</h2>
				</div>
			</div>
        <!-- Predefined heading and description (displayed only once) -->
        <h1 class="main-heading">
            Beragam hidangan untuk memuaskan berbagai selera
        </h1>

        <h5 class="subheading">
            Kami bangga menyajikan hidangan-hidangan tradisional yang telah diwariskan dari generasi ke generasi. Setiap hidangan dipersiapkan dengan cinta dan keahlian, menggunakan bahan-bahan segar dan lokal yang terbaik. Menu kami meliputi berbagai masakan tradisional Indonesia, seperti Nasi Goreng, Sate, dan Gado-gado, serta banyak lainnya.
        </h5>

        <!-- Content item loop -->
       

		<div class="row mb-3">
			<?php if (!empty($konten)) { ?>
				<?php foreach (array_slice($konten, 1 ,3) as $uu) { ?>
					<div class="col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated">
						<div class="staff" style="padding: 0; margin-bottom: 1.5rem; border-radius: 8px; overflow: hidden;">
							<a href="<?= base_url('home/kategori/' . $uu['id_kategori']) ?>" style="display: block;">
								<div class="img" style="background-image: url(<?= base_url('assets/upload/konten/') . $uu['foto'] ?>); height: 300px; width: 100%; background-size: cover; background-position: center; border-radius: 5px;">
								</div>
							</a>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<p class="text-center">No content available</p>
			<?php } ?>
		</div>
        <!-- Single "Baca Selengkapnya" button centered -->
        <div class="text-center" style="margin-top: 20px;">
            <a href="<?= base_url('home/menu') ?>" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px;">
                Baca Selengkapnya
            </a>
        </div>
				
    </div>
	<?php 
		// Akhir dari foreach
		echo '</div>'; // Menutup div yang menampung semua konten
		?>
</section>






	

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Makanan</span>
                <h2 class="mb-4">Populer</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($konten as $uu): ?>
                <?php 
                // Filter data untuk kategori Menu Populer
                if (!isset($uu['nama_kategori']) || $uu['nama_kategori'] != 'Menu Populer') {
                    continue;
                }
                ?>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="<?= base_url('home/kategori/' . $uu['id_kategori']) ?>" style="display: block;">
                            <div class="img" style="background-image: url(<?= base_url('assets/upload/konten/') . $uu['foto'] ?>); height: 300px; width: 100%; background-size: cover; background-position: center; border-radius: 5px;">
                            </div>
                            <div class="text pt-3 pb-4 px-4">
                                <div class="meta">
                                    <div><a href="#"><?= isset($uu['judul']) ? $uu['judul'] : 'Judul tidak tersedia'; ?></a></div>
                                </div>
                                <h3 class="heading"><a href="#"><?= $uu['judul']; ?></a></h3>
                                <p class="clearfix">
                                    <a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" class="float-left read btn btn-primary">Read more</a>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>




	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
				
							<div class="company-brand">
								<img src="<?= base_url('assets/feliciano')?>/images/logo2.png" alt="logo" class="footer-logo" style="transform: scale(1.7); width:80%;">
							</div>
							<br><br>
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

<div class="contact-info" style="margin-left: 60px;">
    <div class="contact-item">
        <h5 class="text-primary mb-3" style="font-size: 35px;">Contac Us</h5> <!-- Title -->
        
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


	
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-592b0e9" data-id="592b0e9" data-element_type="column" style="text-align: right;">
    <div class="elementor-column-wrap elementor-element-populated">
        <div class="elementor-widget-wrap">
            <div class="elementor-element elementor-element-ce04851 elementor-widget elementor-widget-google_maps" data-id="ce04851" data-element_type="widget" data-widget_type="google_maps.default">
                <div class="elementor-widget-container" style="margin-right: 20px; margin-left: 150px;">
                    <div class="elementor-custom-embed">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                            src="https://maps.google.com/maps?q=SMKN%202%20Karanganyar&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" 
                            title="SMKN 2 Karanganyar" aria-label="SMKN 2 Karanganyar" 
                            style="width: 150%; height: 420px; transform: scale(1.05); border-radius: 15px;"></iframe>
                    </div>        
                </div>
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
