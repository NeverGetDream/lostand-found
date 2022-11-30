<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/navs/navbar_global.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/footer/footer.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/globalstyle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/home.css" rel="stylesheet" type="text/css" />
	<script src="components/bootstrap.bundle.js"></script>
	<title>Home | Lost&Found</title>
</head>

<body>
	<!--NAVBAR-->
	<header>
		<div class="logo">
			<a href="home.php"><img src="assets/img/lostlogo.png" class="logo" alt="logo" /></a>
		</div>
		<div class="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<nav class="nav-bar">
			<ul>
				<li><a href="home.php" class="active">HOME</a></li>
				<li><a href="temukan-barang.php" class="active">TEMUKAN BARANG</a></li>
				<li><a href="help.php" class="active">BANTUAN</a></li>
				<li><a href="tentang.php" class="active">TENTANG KAMI</a></li>
				<li><a href="hubungi.php" class="active">HUBUNGI KAMI</a></li>
				<li><a href="login.php" class="masuk">MASUK</a></li>
				<li><a href="register.php" class="register">DAFTAR</a></li>
			</ul>
		</nav>
	</header>
	<script src="components/navbar.js"></script>
	<script src="components/navbar-sticky.js"></script>

	<!--MAIN CONTAINER-->
	<div class="color-carousel">
		<!--CONTAINER ke 1-->
		<div class="container section">
			<!-- Carousel -->
			<div id="demo" class="carousel slide" data-bs-ride="carousel">
				<!-- Indicators/dots -->
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
					<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
					<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
				</div>

				<!-- The slideshow/carousel -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/img/carousel1.png" alt="carousel1" class="d-block w-100" />
					</div>
					<div class="carousel-item">
						<img src="assets/img/carousel2.png" alt="carousel2" class="d-block w-100" />
					</div>
					<div class="carousel-item">
						<img src="assets/img/carousel3.png" alt="carousel3" class="d-block w-100" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--CONTAINER ke 2-->
	<div class="container mt-5 container-m">
		<div class="row">
			<div class="col-sm-6">
				<img src="assets/img/mockup-ae.png" class="mckup" alt="contoh" />
			</div>
			<div class="col-sm-6 text-mckup">
				<h2 style="font-weight: 900">
					LOST AND <span class="head-color">FOUND</span>
				</h2>
				<p class="paraf">
					Mau cari barang hilang jadi semudah lewat sentuhan jari. Lewat Lost
					and Found, kamu bisa melakukan pencarian barang hilang atau
					melaporkan barang hilang apapun dengan mudah.
					<span class="paraf-color">#MulaiKebaikan</span> bersama kami untuk
					menolong lebih banyak orang.
				</p>
				<button class="button-more">Temukan Barangmu</button>
			</div>
		</div>
	</div>
	<!--CONTAINER ke 3-->
	<div class="d-block container-m" style="background-color: #fafafa">
		<div class="container">
			<h2 class="title text-center title-m">
				Menemukan Barang Dengan Lost & Found
			</h2>
			<div class="row roww-m">
				<div class="col-sm-4">
					<img src="assets/img/security.png" class="row-img" alt="security" />
					<p class="desc-name">Keamanan Terjamin</p>
					<p class="desc-paraf">
						Temukan barang dan titipkan di LOST AND FOUND, barang akan aman
						pada kami sampai ketangan pemilik.
					</p>
				</div>
				<div class="col-sm-4">
					<img src="assets/img/support.png" class="row-img" alt="security" />
					<p class="desc-name">Bantuan Non-stop</p>
					<p class="desc-paraf">
						Bantuan Non-stop memungkin kan anda untuk menghubungi kami, dan
						konfirmasi ketersediaan barang.
					</p>
				</div>
				<div class="col-sm-4">
					<img src="assets/img/location.png" class="row-img" alt="security" />
					<p class="desc-name">Kemudahan Pencarian</p>
					<p class="desc-paraf">
						Kemudahan untuk pencarian, terdapat peta penitipan barang hilang
						yang memudahkan anda menemukan dimana barang hilang.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--CONTAINER ke 4-->
	<div class="container-m d-block">
		<div class="container">
			<h2 class="title text-center title-m">Mulai Pakai Lost & Found</h2>
			<div class="row">
				<div class="col-sm-6 text-mckup first">
					<h2 style="font-weight: 900">
						Pakai LOST AND <span class="head-color">FOUND</span> untuk Mencari
						Barang Lebih Mudah
					</h2>
					<ul class="order-list">
						<li class="checklist">
							Dapatkan barang hilang anda dengan mudah hanya melalui perangkat
							anda.
						</li>
						<li class="checklist">
							Memiliki outlet penitipan barang yang menjamin keaman barang
							yang hilang.
						</li>
						<li class="checklist">
							Anda dapat menitipkan barang yang ditemukan dan dapatkan reward,
							dari hasil kebaikan anda.
						</li>
						<li class="checklist">
							Hubungi kami, apakah barang anda yang hilang terdapat pada kami,
							anda akan kami informasikan apabila seseorang menemukan barang
							anda.
						</li>
					</ul>
					<button class="button-more">Mulai Sekarang</button>
				</div>
				<div class="col-sm-6 second">
					<img src="assets/img/start.png" class="mckup" alt="contoh" />
				</div>
			</div>
		</div>
	</div>
	<!--CONTAINER ke 5-->
	<div class="d-block container-m" style="background-color: #fafafa">
		<div class="container">
			<h2 class="title text-center title-m">
				Jalani Hidup penuh makna dengan saling membantu
			</h2>
			<p class="p-5" style="text-align: center; font-size: large">
				Jalani Hidup penuh makna dengan saling membantu, kehilangan barang
				yang jatuh seperti dompet, handphone, dan hal yang lain merupakan hal
				yang sangat mengecewakan. <br /><br />
				Membantu seseorang merupakan hal yang luar biasa, selain orang lain
				terbantu kita merasa bahwa itu suatu hal yang baik. LOST AND FOUND
				hadir untuk membantumu melakukan hal-hal baik lebih banyak.
				<br /><br />
				Titipkan barang yang anda temukan, LOST AND FOUND adalah aplikasi yang
				membantumu berbuat kebaikan, dan mencari barangmu yang hilang, agar
				kamu tidak perlu bersusah payah untuk mencari barangmu yang jatuh ntah
				dimana.
			</p>
			<h1 style="
            margin-top: 2rem;
            padding-top: 2rem;
            text-align: center;
            font-weight: 700;
          ">
				#LOSTAND<span class="head-color">FOUND</span> UNTUK KEBAIKAN
			</h1>
		</div>
	</div>
	<!--FOOTER-->
	<footer class="container-footer">
		<div class="page-one">
			<div class="box">
				<figure>
					<a href="#">
						<img src="assets/img/footer-logo.png" alt="Lost and found">
					</a>
				</figure>
			</div>
			<div class="box">
				<div class="box-center">
					<a class="">Temukan Barang</a>
					<a class="">Tentang kami</a>
					<a class="">Hubungi kami</a>
				</div>
			</div>
			<div class="box">
				<h2>Ikuti Kami</h2>
				<div class="social-media">
					<i class="bi bi-facebook"></i>
					<i class="bi bi-instagram"></i>
					<i class="bi bi-twitter"></i>
					<i class="bi bi-youtube"></i>
				</div>
			</div>
		</div>
		<div class="page-two">
			<small>&copy; 2022 <b>LOST AND FOUND</b> - PT. Kerja Kelompok Sukses</small>
		</div>
	</footer>
</body>

</html>