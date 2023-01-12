<body>
    <div class="bg-utama p-head">
        <div class="container">
            <div class="mx-auto d-block">
                <?php
                    $profile_pict = $this->session->userdata['auth_data']['image'];
                ?>
                <a href="">
                    <img class="mx-auto d-block img" src="<?= base_url('assets/img/profile/').$profile_pict ?>" alt="">
                </a>
                <h2 class="greeting pt-4">Selamat <?= $greeting ?>, <?= $userdata['first_name'] ?></h2>
                <p class="greeting-text">Lihat semua informasi diri Anda di sini. Semua aman dan terlindungi.</p>
            </div>
        </div>
    </div>

    <div class="container p-body">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-4">
                    <img class="img-preview mx-auto d-block" src="<?= base_url('assets/img/profile/').$profile_pict ?>" alt="Profile Not Found">
                </div>
            </div>
            <div class="col-md-8">
                <!-- Kolom -->
                <div class="container pt-4">
                    <!-- Biodata -->
                    <div>
                        <!-- Informasi Diri -->
                        <h6 class="data-title">Informasi Diri</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row row-section">
                            <div class="col-md-6">
                                <h2 class="tx-title">Nama Depan</h2>
                                <p class="tx-body text-muted"><?= $userdata['first_name'] ?></p>
                            </div>
                            <div class="col-md-6">
                                <h2 class="tx-title">Nama Belakang</h2>
                                <p class="tx-body text-muted"><?= $userdata['last_name'] ?></p>
                            </div>
                        </div>
                        <div class="row row-section">
                            <div class="col-md-6">
                                <h2 class="tx-title">E-Mail</h2>
                                <p class="tx-body text-muted"><?= $userdata['email'] ?></p>
                            </div>
                            <div class="col-md-6">
                                <h2 class="tx-title">Password</h2>
                                <p class="tx-body text-muted">*</p>
                            </div>
                        </div>
                        <div class="row row-section">
                            <div class="col-md-6">
                                <h2 class="tx-title">Alamat</h2>
                                <p class="tx-body text-muted"><?= $userdata['alamat'] ?></p>
                            </div>
                            <div class="col-md-6">
                                <h2 class="tx-title">Kota</h2>
                                <p class="tx-body text-muted"><?= $userdata['kota'] ?></p>
                            </div>
                        </div>

                        <?php
                        if($userdata['role_id'] == 1){
                            $role = 'Admin';
                        }
                        elseif($userdata['role_id'] == 2){
                            $role = 'User/Pengguna';
                        }

                        if($userdata['is_active'] == 1){
                            $status = 'Aktif';
                        }
                        else{
                            $status = 'Tidak Aktif';
                        }

                        ?>
                        <div class="row row-section">
                            <div class="col-md-6">
                                <h2 class="tx-title">Jenis Akun</h2>
                                <p class="tx-body text-muted"><?= $role ?></p>
                            </div>
                            <div class="col-md-6">
                                <h2 class="tx-title">Status Akun</h2>
                                <p class="tx-body text-muted"><?= $status ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row-section pt-4">
                        <!-- Informasi Barang -->
                        <h6 class="data-title">Informasi Barang</h6>
                        <hr class="mt-0 mb-4">

                        <div class="row-section">
                            <h2 class="tx-title">Jumlah Barang yang Anda Upload</h2>
                            <p class="tx-body text-muted">34 Barang</p>
                        </div>
                        <div class="row-section">
                            <h2 class="tx-title">Barang Dilaporkan Kembali Kepada Pemilik Aslinya</h2>
                            <p class="tx-body text-muted">4 Barang</p>
                        </div>

                    </div>
                </div>
                <!-- End of Biodata -->

            </div>
        </div>
    </div>
</body>