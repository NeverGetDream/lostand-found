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

        <style>
          .profile-icon{
            width: 40px;
            margin-top: 25px;
            margin-right: 10px;
          }
        </style>

        <li><a href=<?= base_url('profile'); ?> class="active <?php if($status == 'profile' ){ echo $status; } ?>">PROFILE</a></li>
        <li><a href=<?= base_url('main/editprofile'); ?> class="active <?php if($status == 'edit' ){ echo $status; } ?>">EDIT PROFILE</a></li>
        <li><a href=<?= base_url('main/security'); ?> class="active <?php if($status == 'security' ){ echo $status; } ?>">KEAMANAN</a></li>

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
                <a href="'. base_url('profile') .'" class="profileimg">
                  <img src="'. base_url('assets/img/profile/').$profile_pict .'" alt="Profile" class="profile-icon" style="border-radius: 50%;">
                </a>
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