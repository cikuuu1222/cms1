<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title img src="<?= base_url('assets/feliciano')?>/images/logo2.png" alt="logo" class="footer-logo" style="transform: scale(1.7); width:70%;"></title>
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

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
    <div class="company-brand">
					<img src="<?= base_url('assets/feliciano')?>/images/logo2.png" alt="" class="footer-logo" style="transform: scale(1.7); width:70%;">
				</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?= base_url()?>" class="nav-link">Home</a></li>
					<?php foreach ($kategori as $kate) {?>
					<li class="nav-item active"><a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-link">
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

 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/feliciano')?>images/cef2.jpg');" data-stellar-background-ratio="0.5">
    <div class="company-brand">
					
				</div>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2">
                <</p>
          </div>
        </div>
      </div>
    </section>


    <div id="caraouselExampleControls" class="main-slider pattern-overlay" data-ride="caraousel">
  <div class="slider-item caraousel-inner" 
       style="display: flex; align-items: center; justify-content: center; gap: 20px; flex-wrap: wrap; padding: 20px;">
    
    <!-- Gambar -->
    <div class="banner-image" style="flex: 1; text-align: center;">
      <?php if (isset($konten) && !empty($konten->foto)): ?>
        <img src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" 
             alt="Banner" 
             style="width: 500px; height: auto; border-radius: 8px; ">
      <?php else: ?>
        <p>Gambar tidak tersedia</p>
      <?php endif; ?>
    </div>

    <!-- Teks -->
    <div class="banner-content" style="flex: 1; text-align: left;">
      <h2 class="banner-title"><?= isset($konten->judul) ? $konten->judul : 'Judul tidak tersedia'; ?></h2>
      <p><?= isset($konten->keterangan) ? $konten->keterangan : 'Keterangan tidak tersedia'; ?></p>
      <div class="btn-wrap">
        <a href="<?= base_url('detail') ?>" 
           class="btn btn-dark text-uppercase mt-3">Shop Collection<i class="icon icon-ns-arrow-right"></i></a>
      </div>
    </div>
    
  </div>
</div>




    <!-- <div class="collection-item d-flex flex-wrap my-5">
          <div class="col-md-6 column-container">
            <div class="image-holder">
                <?php if (!empty($konten->foto)): ?>
                    <img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="collection" class="product-image img-fluid">
                <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-5 m-0 m-md-5">
              <h3 class="element-title text-uppercase">Classic winter collection</h3>
              <p>Dignissim lacus, turpis ut suspendisse vel tellus. Turpis purus, gravida orci, fringilla a. Ac sed eu
                fringilla odio mi. Consequat pharetra at magna imperdiet cursus ac faucibus sit libero. Ultricies quam
                nunc, lorem sit lorem urna, pretium aliquam ut. In vel, quis donec dolor id in. Pulvinar commodo mollis
                diam sed facilisis at cursus imperdiet cursus ac faucibus sit faucibus sit libero.</p>
              <a href="#" ">/a>
            </div>
          </div>
        </div> -->


	


<section class="ftco-section">
    <div class="container">
        <?php 
        if (is_array($konten) && !empty($konten)) {
            $current_category = null;
            foreach ($konten as $uu) { 
                if (is_array($uu) && isset($uu['nama_kategori'])) {
                    if ($current_category != $uu['nama_kategori']) {
                        if ($current_category) {
                            echo '</div>'; // Tutup div sebelumnya jika kategori berubah
                        }
                        $current_category = $uu['nama_kategori'];
                        echo '<div class="row no-gutters justify-content-center mb-5 pb-2">
                                <div class="col-md-12 text-center heading-section ftco-animate">
                                    <h2 class="mb-4">' . $current_category . '</h2>
                                </div>
                              </div>';
                        echo '<div class="row no-gutters d-flex align-items-stretch">';
                    }
                    // Konten kategori bisa diletakkan di sini
                } else {
                    echo "Data tidak valid dalam konten.";
                }
            }
            echo '</div>'; // Tutup div terakhir
        } 
        
        ?>
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
