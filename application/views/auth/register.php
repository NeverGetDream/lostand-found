<body style="background-color: #f9a826;">
    <section class="vh-100" style="background-color: #f9a826;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="<?= base_url('assets/'); ?>img/loginpict.png" alt="login form" class="img-fluid" style="margin-top: 200px" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form class="user" method="post" action=<?= base_url('auth/register'); ?>>
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i>
                                            <span class="h1 fw-bold mb-0">LOST&FOUND</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                                            Daftar akun
                                        </h5>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="fname">Nama Depan</label>
                                                <input type="text" id="fname" class="form-control form-control-lg" placeholder="Nama Depan" name="fname" value=<?= set_value('fname') ?>>
                                                <small class="text-danger"><?= form_error('fname') ?></small>
                                            </div>
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="bname">Nama Belakang</label>
                                                <input type="text" id="bname" class="form-control form-control-lg" placeholder="Belakang" name="bname" value=<?= set_value('bname') ?>>
                                                <small class="text-danger"><?= form_error('bname') ?></small>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email address</label>
                                            <input type="email" id="email" class="form-control form-control-lg" placeholder="Alamat Email" name="email" value=<?= set_value('email') ?>>
                                            <small class="text-danger"><?= form_error('email') ?></small>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" name="password" />
                                            <small class="text-danger"><?= form_error('password') ?></small>
                                        </div>
                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="provinsi">Provinsi</label>
                                                <input type="text" id="provinsi" class="form-control form-control-lg" placeholder="Provinsi" name="provinsi" value=<?= set_value('provinsi') ?>>
                                                <small class="text-danger"><?= form_error('provinsi') ?></small>
                                            </div>
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="kota">Kota</label>
                                                <input type="text" id="kota" class="form-control form-control-lg" placeholder="Asal Kota" name="kota" value=<?= set_value('kota') ?>>
                                                <small class="text-danger"><?= form_error('kota') ?></small>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="kota">Alamat</label>
                                            <input type="text" id="alamat" class="form-control form-control-lg" placeholder="Alamat" name="alamat" value=<?= set_value('alamat') ?>>
                                            <small class="text-danger"><?= form_error('alamat') ?></small>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">
                                                Daftar
                                            </button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81">
                                            Sudah memiliki akun?
                                            <a href=<?= base_url('auth'); ?> style="color: #393f81">Masuk disini!</a>
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