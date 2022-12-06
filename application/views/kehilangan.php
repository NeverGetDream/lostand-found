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
    <link rel="stylesheet" href="./assets/css/temukan.css" />
    <title>LOST</title>
  </head>
  <body>
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
      <!--CONTAINER-->
      <div class="section section-mt">
        <div class="container mt-5">
            <div class="row">
            <div class="col-sm-6" >
                <div id="search-container">
                    <input
                      type="search"
                      id="search-input"
                      placeholder="Cari barang luh disini"
                      class="form-control form-control-md"
                    />
            </div>
            </div>
            <div class="col-sm-6" style="padding-bottom:10px;">
                <button class="button-search" id="search">Cari Barang</button>
            </div>
        </div>
        <div id="buttons">
            <button class="button-value button-filter" onclick="filterProduct('all')">All</button>
            <button class="button-value button-filter" onclick="filterProduct('Handphone')">
                Handphone
            </button>
            <button class="button-value button-filter" onclick="filterProduct('Dompet')">
                Dompet
            </button>
            <button class="button-value button-filter" onclick="filterProduct('Kunci')">
                Kunci
            </button>
            <button class="button-value button-filter" onclick="filterProduct('Bendalain')">
                Baranglain
            </button>
        </div>
        <div id="products"></div>
    </div>
    <script src="./components/filter.js"></script>
</body>
</html>