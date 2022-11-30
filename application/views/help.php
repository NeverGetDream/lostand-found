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
	<title>Bantuan | LOSTANDFOUND</title>
</head>

<body>
	<!-- Navbar -->
	<div>
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
				<li><a href=<?= base_url('home') ?> class="active">HOME</a></li>
				<li><a href=<?= base_url('temukan_barang') ?> class="active">TEMUKAN BARANG</a></li>
				<li><a href=<?= base_url('help') ?> class="active">BANTUAN</a></li>
				<li><a href=<?= base_url('tentang') ?> class="active">TENTANG KAMI</a></li>
				<li><a href=<?= base_url('hubungi') ?> class="active">HUBUNGI KAMI</a></li>
				<li><a href=<?= base_url('login') ?> class="masuk">MASUK</a></li>
				<li><a href=<?= base_url('register') ?> class="register">DAFTAR</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<script src="components/navbar.js"></script>
	<script src="components/navbar-sticky.js"></script>

	<!-- Main Conten -->
	<div class="color-carousel">
		<div class="container section-mt">
			<div class="row">
				<div class="col-sm-12 text-mckup">
					<div class="mt-5 mb-2">
						<h1 class="mt-5" style="font-weight: 900; text-align: center; color: #7004d4;">BUTUH <span style="color: white;">BANTUAN..?</span></h1>
					</div>

					<!-- Quick Help -->
					<div class="mt-6 container">
						<div class="row container mt-4 mb-4" style="align-self: center;">
							<div class="col-sm-4 container mt-4">
								<a href="#" style="text-decoration: none;">
									<img src="assets/img/about/faq.png" alt="" width="250px" class="mx-auto d-block">
									<h2 class="mt-1" style="font-weight: 900; text-align: center; color: #7004d4;">FAQ
									</h2>
								</a>
							</div>
							<div class="col-sm-4 container mt-4">
								<a href="#" style="text-decoration: none;">
									<img src="assets/img/about/bantuan.png" alt="" width="250px" class="mx-auto d-block">
									<h2 class="mt-1" style="font-weight: 900; text-align: center; color: #7004d4;">HELP
									</h2>
								</a>
							</div>
							<div class="col-sm-4 container mt-4">
								<a href="#" style="text-decoration: none;">
									<img src="assets/img/about/ask-2.png" alt="" width="250px" class="mx-auto d-block">
									<h2 class="mt-1" style="font-weight: 900; text-align: center; color: #7004d4;">ASK
									</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Accordions -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/accordions.css">
	<script src="components/accordions.js"></script>


	<div class="mt-4 mb-2">
		<div id="accordion" class="container" style="padding-left: 70px; padding-right: 70px;">
			<div class="container mb-5">
				<div class="row">
					<div class="col-lg-10">
						<h1 class="page-title">Bantuan <span class="head-color">Lost&Found</span></h1>
						<div class="accordion" id="accordionExample">
							<!-- First -->
							<div class="card">
								<div class="card-header" id="headingOne">
									<h2 class="clearfix mb-0">
										<a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="true" aria-controls="collapseOne">
											<i class="fa fa-chevron-circle-down"></i>
											Apasih itu Lost&Found?
										</a>
									</h2>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
									data-parent="#accordionExample">
									<div class="card-body">
										Lost&Found merupakan sebuah platform yang memberikan layanan dalam membantu orang-orang yang
										mengalami kehilangan barang. Lost&Found akan membantu dalam menemukan barang yang hilang dengan
										lebih cepat karena telah terkoneksi dengan berabagai sosial media seperti Instagram dan Twitter.
									</div>
								</div>
							</div>
							<!-- Second -->
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h2 class="clearfix mb-0">
										<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
											aria-expanded="false" aria-controls="collapseTwo">
											<i class="fa fa-chevron-circle-down"></i>
											Sulitkah menggunakan Lost&Found?
										</a>
									</h2>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
									data-parent="#accordionExample">
									<div class="card-body">
										Lost&Found merupakan sebuah platform yang user friendly sehingga akan sangat mudah digunakan
										oleh pengguna awam sekalipun. User dapat mengakses hanya dari layar laptop atau komputer bahkan
										hanya dari layar ponsel saja.
									</div>
								</div>
							</div>
							<!-- Third -->
							<div class="card">
								<div class="card-header" id="headingThree">
									<h2 class="clearfix mb-0">
										<a class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
											<i class="fa fa-chevron-circle-down"></i>
											Bagaimana cara melaporkan barang yang hilang?
										</a>
									</h2>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
									data-parent="#accordionExample">
									<div class="card-body">
										Untuk melaporakan barang yang hilang, Anda dapat
										<a href="login.php" style="text-decoration: none;"> login </a>
										atau
										<a href="register.php" style="text-decoration: none;"> daftar </a>
										terlebih dahulu, kemudian lengkapi data diri Anda dan lakukan verifikasi. Setelah itu beralih ke menu
										<a href="temukan-barang.php" style="text-decoration: none;"> temukan barang </a>
										kemudian masukkan ciri-ciri dan informasi mengenai barang Anda yang hilang. Sebelum submit Anda juga perlu
										menverifikasi bahwa barang tersebut adalah benar barang Anda.
										
									</div>
								</div>
							</div>
							<!-- Fourth -->
							<div class="card">
								<div class="card-header" id="headingFour">
									<h2 class="mb-0">
										<a class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseFour" aria-expanded="false"
											aria-controls="collapseFour">
											<i class="fa fa-chevron-circle-down"></i>
											Jika Anda menemukan barang?
										</a>
									</h2>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour"
									data-parent="#accordionExample">
									<div class="card-body">
										Jika Anda menemukan barang, Anda dapat melaporkan barang tersebut pada halaman
										<a href="temukan-barang.php" style="text-decoration: none;"> temukan barang </a>
										kemudian cocokkan apakah barang yang Anda temukan adalah benar. Setelah itu klik tombol "Saya menemukan"
										dan tuliskan informasi mengenai barang yang Anda temukan dan tunggu sampai pemilik mengonfirmasi bahwa barang
										tersebut adalah benar barangnya yang hilang. Setelah itu Anda dapat melakukan perbincangan secara pribadi mengenai tempat
										dan cara Anda mengembalikan barang tersebut kepada pemiliknya. Kami juga menyediakan fitur antar jemput dengan ongkos
										kirim yang terjangkau.
									</div>
								</div>
							</div>
							<!-- Fiveth -->
							<div class="card">
								<div class="card-header" id="headingFive">
									<h2 class="mb-0">
										<a class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseFive" aria-expanded="false"
											aria-controls="collapseFive">
											<i class="fa fa-chevron-circle-down"></i>
											Apakah Lost&Found aman?
										</a>
									</h2>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive"
									data-parent="#accordionExample">
									<div class="card-body">
										Kami bekerja sama dengan beberapa pihak, seperti pemerintah setempat, Indomaret, kepolisian dan pihak yang berwenang lainnya.
										Kami juga melakukan tahap verifikasi yang dilakukan oleh teknologi yang canggih sehingga setiap user yang melakukan
										registrasi dan daftar sebagai user akan dipastikan benar-benar warga Indonesia. Kami juga melakukan pendataan berdasarkan
										NIK dari user sehingga mencegah adanya akun penipuan pada Lost&Found kami.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div>
							<a href="">
								<img src="assets/img/asking.png" alt="Asking" width="340px">
							</a>
						</div>
					</div>
				</div>
			</div>
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