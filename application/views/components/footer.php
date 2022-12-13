<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/navs/navbar_global.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/footer/footer.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/globalstyle.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/home.css" rel="stylesheet" type="text/css" />
  <script src="<?= base_url('components/'); ?>bootstrap.bundle.js"></script>

</head>

<body>
<footer class="container-footer">
    <div class="page-one">
      <div class="box">
        <figure>
          <a href="#">
            <img src="<?= base_url('assets/'); ?>img/footer-logo.png" alt="Lost and found">
          </a>
        </figure>
      </div>
      <div class="box">
        <div class="box-center">
        <?php
          if(!empty($this->session->userdata['auth_data'])){
            echo '
              <a href="'.base_url() .'main/temukan" class="active">Temukan Barang</a>
            ';
          }
        ?>
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