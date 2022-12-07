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
        <li><a href=<?= base_url('admin'); ?> class="active">HOME</a></li>
        <li><a href=<?= base_url('admin/user_list'); ?> class="active">DAFTAR USER</a></li>
        <li><a href=<?= base_url('admin/'); ?> class="active">BARANG HILANG</a></li>
        <li><a href=<?= base_url('admin/'); ?> class="active">BATANG DITEMUKAN</a></li>
      </ul>
    </nav>
  </header>
  <script src="components/navbar.js"></script>
  <script src="components/navbar-sticky.js"></script>
</body>

</html>