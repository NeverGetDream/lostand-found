<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>favicon.ico" />
  <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/navs/navbar_global.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/footer/footer.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/globalstyle.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/home.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>css/tentang.css" rel="stylesheet" type="text/css" />
  <script src="<?= base_url('components/'); ?>bootstrap.bundle.js"></script>
  <title><?= $title ?></title>
</head>

<body>
  <!--NAVBAR-->
  <header>
    <div class="logo">
      <a href=<?= base_url(''); ?>><img src="<?= base_url('assets/'); ?>img/lostlogo.png" class="logo" alt="logo" /></a>
    </div>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <nav class="nav-bar">
      <ul>
        <!-- Paging -->
        <li><a href=<?= base_url(''); ?> class="active">HOME</a></li>
        <?php
          if(!empty($this->session->userdata['auth_data'])){
            echo '
              <li><a href="'.base_url() .'main/temukan" class="active">TEMUKAN BARANG</a></li>
            ';
          }
        ?>
        <li><a href=<?= base_url('main/help'); ?> class="active">BANTUAN</a></li>
        <li><a href=<?= base_url('main/tentang'); ?> class="active">TENTANG KAMI</a></li>
        <li><a href=<?= base_url('main/hubungi'); ?> class="active">HUBUNGI KAMI</a></li>

        <?php
          if(empty($this->session->userdata['auth_data'])){
            echo '
              <!-- Auth -->
              <li><a href="'. base_url() .'auth" class="masuk">MASUK</a></li>
              <li><a href="'. base_url() .'auth/register" class="register">DAFTAR</a></li>
            ';
          }
          else{
            echo '
              <!-- Logout -->
              <li>
                <h4 id="title_name active" style="color: #F9A826; padding-top: 32px; font-size: 20px; margin-right: 20px; margin-left: 20px;">Halo, '. $this->session->userdata['auth_data']['first_name'] .'</h4>
              </li>
              <li>
                <a href="'. base_url() .'auth/logout" class="masuk" id="quit">LOGOUT</a>
              </li>
            ';
          }
        ?>
      </ul>
    </nav>
  </header>
  <script src="<?= base_url('components/'); ?>navbar.js"></script>
  <script src="<?= base_url('components/'); ?>navbar-sticky.js"></script>
</body>

</html>