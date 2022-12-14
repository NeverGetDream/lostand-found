<body>
  <section class="vh-100" style="background-color: #f9a826">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="<?= base_url('assets/img/') ?>register.png" alt="login form" class="img-fluid" style="margin-top: 150px" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form class="user" method="post" action=<?= base_url('auth'); ?>>
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i>
                      <span class="h1 fw-bold mb-0">LOST&FOUND</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                      Masuk kedalam akun
                    </h5>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email address</label>
                      <input type="email" id="email" class="form-control form-control-lg" placeholder="Alamat Email" name="email" value=<?= set_value('email') ?>>
                      <small class="text-danger"><?= form_error('email') ?></small>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" name="password">
                      <small class="text-danger"><?= form_error('password') ?></small>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Masuk</button>
                    </div>

                    <a class="small text-muted" href="#!">Lupa Password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81">
                      Belum punya akun?
                      <a href=<?= base_url('auth/register'); ?> style="color: #393f81">Daftar disini!</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>