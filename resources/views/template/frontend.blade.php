<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Conbix - Business Consulting HTML5 Template">
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template">
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>Jurusan Teknik Elektro dan Teknik Informatika</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="frontend/assets/img/logo-politap.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="frontend/assets/css/all.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="frontend/assets/css/animate.css">
	<!-- Swiper Bundle CSS -->
	<link rel="stylesheet" href="frontend/assets/css/swiper-bundle.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="frontend/assets/css/meanmenu.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="frontend/assets/sass/style.css"> 
</head>

<body>
	<!-- Preloader Start -->
	{{-- <div class="theme-loader">
		<div class="spinner">
			<div class="spinner-bounce one"></div>
			<div class="spinner-bounce two"></div>
			<div class="spinner-bounce three"></div>
		</div>
	</div> --}}
	<!-- Preloader End -->
	<!-- Dark Light Start -->
	{{-- <div class="switch__tab">
		<span class="switch__tab-btn active light-mode-title">Light</span>
		<span class="mode__switch" onclick="darkLight()"><span></span></span>
		<span class="switch__tab-btn dark-mode-title">Dark</span>
	</div> --}}
	<!-- Dark Light End -->
	<!-- Top Bar Start -->
	{{-- <div class="top__bar">
		<div class="container custom__container">
			<div class="row">
				<div class="col-xl-5 col-md-6">
					<div class="top__bar-left">
						<a href="#"><i class="far fa-map-marker-alt"></i>8502 Preston Rd. Inglewood, Maine 98380</a>
					</div>
				</div>
				<div class="col-xl-7 col-md-6">
					<div class="top__bar-right">
						<a href="mailto:conbix@gmail.com"><i class="fas fa-envelope"></i>conbix@gmail.com</a>
						<div class="top__bar-right-social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- Top Bar End -->
	<!-- Header Area Start -->
@include('section.frontend.header')
	<!-- Header Area End -->	
@yield('content')
	<!-- Footer Top Area Start -->
@include('section.frontend.footer')	
	<!-- Footer One Area End -->
	<!-- Scroll Btn Start -->
	<div class="scroll-up">
		<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
	</div>
	<!-- Scroll Btn End -->
	<!-- Main JS -->
	<script src="frontend/assets/js/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="frontend/assets/js/bootstrap.min.js"></script>
	<!-- Counter Up JS -->
	<script src="frontend/assets/js/jquery.counterup.min.js"></script>
	<!-- Popper JS -->
	<script src="frontend/assets/js/popper.min.js"></script>
	<!-- Progressbar JS -->
	<script src="frontend/assets/js/progressbar.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Swiper Bundle JS -->
	<script src="frontend/assets/js/swiper-bundle.min.js"></script>
    <!-- Isotope JS -->
	<script src="frontend/assets/js/isotope.pkgd.min.js"></script>
	<!-- Waypoints JS -->
	<script src="frontend/assets/js/jquery.waypoints.min.js"></script>
	<!-- Mean Menu JS -->
	<script src="frontend/assets/js/jquery.meanmenu.min.js"></script>
	<!-- Custom JS -->
	<script src="frontend/assets/js/custom.js"></script>
</body>
</html>