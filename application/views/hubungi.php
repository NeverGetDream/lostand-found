<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/css/navs/navbar_global.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/css/footer/footer.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/globalstyle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/hubungi.css" rel="stylesheet" type="text/css" />
    <script src="components/bootstrap.bundle.js"></script>
    <title>Hubungi | Lost&Found</title>
  </head>

  <body>
    <!--NAVBAR-->
    <header>
      <div class="logo">
        <a href="home.php"
          ><img src="assets/img/lostlogo.png" class="logo" alt="logo"
        /></a>
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
    <!--CONTAINER Ke 1-->
    <div class="section section-mt">
      <div class="container">
        <h1>Kontak Kami</h1>
        <p>
          Jika Anda memiliki pertanyaan atau tidak dapat menemukan apa yang Anda
          cari,<br />jangan ragu untuk menghubungi kami di:
        </p>
        <div class="row">
          <div class="col-lg-6">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11239.650602242256!2d119.48906827476623!3d-5.1332207743108675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcca2887e13f%3A0xf5c059de86dd07!2sPNUP%20Politeknik%20Negeri%20Ujung%20Pandang!5e0!3m2!1sid!2sid!4v1667425887710!5m2!1sid!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-lg-5">
            <h2>Kantor Sementara</h2>
            <p>
              PT. Kerja Kelompok Sukses <br />Kampus 1 PNUP <br />JL. Jalan
              Utama Unhas
            </p>
            <div class="row">
              <div class="col-5">
                <p><i class="bi bi-whatsapp"></i> (085) xxxxxx</p>
              </div>
              <div class="col-7">
                <p><i class="bi bi-envelope"></i> tanya@lostfound.id</p>
              </div>
            </div>
            <div>
            <a href="help.php"><button class="button-more" href="help.php">Perlu bantuan</button></a>
              <br />
              <button
                class="button-more"
                data-bs-toggle="modal"
                data-bs-target="#myModal"
              >
                Hubungi Kami
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-style" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header" style="border: none">
            <h4 class="modal-title">Hubungi Kami</h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="form-outline mb-4">
                <label class="form-label" for="nama"
                  >Nama Lengkap</label
                >
                <input
                  type="text"
                  id="nama"
                  class="form-control form-control-md"
                  placeholder="Nama Lengkap"
                />
              </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="email"
                  >Email address</label
                >
                <input
                  type="email"
                  id="email"
                  class="form-control form-control-md"
                  placeholder="Alamat Email"
                />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="text"
                  >Pesan Anda</label
                >
                <textarea rows="5" placeholder="Keluh Kesah Anda" class="form-control form-control-md" id="comment" name="text"></textarea>
            </div>
            <div class="modal-footer"style="border: none"x>
                <button class="button-more">Perlu bantuan</button>
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
              <img src="assets/img/footer-logo.png" alt="Lost and found" />
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
        <small
          >&copy; 2022 <b>LOST AND FOUND</b> - PT. Kerja Kelompok Sukses</small
        >
      </div>
    </footer>
  </body>
</html>
