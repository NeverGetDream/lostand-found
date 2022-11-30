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
    <script src="components/navbar.js"></script>
    <script src="components/navbar-sticky.js"></script>

    <!-- Main Pict -->
    <div>
		<div class="container section-mt">
			<div class="row">
				<div class="col-sm-12 text-mckup">
					<div class="mt-5 mb-2">
						<h1 class="mt-5" style="font-weight: 900; text-align: center; color: #7004d4;">LOST OR <span class="head-color">FOUND SOMETHING?</span></h1>
					</div>

					<!-- L of F -->
					<div class="mt-4 container">
						<div class="row container mt-2 mb-4" style="align-self: center;">
							<div class="col-sm-4 container mt-1">
								<a href="kehilangan.php" style="text-decoration: none;">
									<img src="assets/img/lost.png" alt="LOST" width="400px" style="float: right;">
									<h2 class="mt-1 head-color" style="font-weight: 900; text-align: center;">LOST</h2>
								</a>
                                <p style="text-align: center;">Temukan barang Anda yang hilang!</p>
							</div>
							<div class="col-sm-4 container mt-1">
								<a href="menemukan-info.php" style="text-decoration: none;">
									<img src="assets/img/found.png" alt="FOUND" width="400px" style="float: left;">
									<h2 class="mt-1 head-color" style="font-weight: 900; text-align: center;">FOUND</h2>
								</a>
                                <p style="text-align: center;">Laporkan barang yang Anda temukan hingga sampai pada pemilik aslinya.</p>
							</div>
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