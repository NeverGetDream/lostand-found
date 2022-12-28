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

  <style>
    .profile-icon{
      width: 40px;
      margin-top: 25px;
      margin-right: 10px;
    }
  </style>
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
        <li><a href=<?= base_url(''); ?> class="active <?php if($status == 'home'){ echo $status; } ?>">HOME</a></li>
        <?php
          if(!empty($this->session->userdata['auth_data'])){
            if($status == 'barang'){
              echo '
                <li><a href="'.base_url() .'main/barang" class="active barang">TEMUKAN BARANG</a></li>
              ';
            }
            else{
              echo '
              <li><a href="'.base_url() .'main/barang" class="active">TEMUKAN BARANG</a></li>
              ';
            }
          }
        ?>
        <li><a href=<?= base_url('main/help'); ?> class="active <?php if($status == 'bantuan' ){ echo $status; } ?>">BANTUAN</a></li>
        <li><a href=<?= base_url('main/tentang'); ?> class="active <?php if($status == 'tentang' ){ echo $status; } ?>">TENTANG KAMI</a></li>
        <li><a href=<?= base_url('main/hubungi'); ?> class="active <?php if($status == 'hubungi' ){ echo $status; } ?>">HUBUNGI KAMI</a></li>

        <?php
          if(empty($this->session->userdata['auth_data'])){
            echo '
              <!-- Auth -->
              <li><a href="'. base_url() .'auth" class="masuk">MASUK</a></li>
              <li><a href="'. base_url() .'auth/register" class="register">DAFTAR</a></li>
            ';
          }
          else{
            $profile_pict = $this->session->userdata['auth_data']['image'];
            echo '
              <li>
                <h4 id="title_name" style="color: #F9A826; padding-top: 32px; font-size: 20px; margin-right: 20px; margin-left: 20px;">Halo, '. $this->session->userdata['auth_data']['first_name'] .'</h4>
              </li> 
              <li>
                <img src="'. base_url('assets/img/profile/').$profile_pict .'" alt="Profile" class="profile-icon" style="border-radius: 50%;">
              </li>
              <!-- Logout -->
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