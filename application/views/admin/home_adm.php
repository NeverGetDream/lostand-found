<html>
<body>
    <!-- Content -->
    <div class="d-block container-m" style="background-color: #fafafa; padding-top: 150px;">
        <div class="container">
            <h2 class="title text-center title-m">
                WELLCOME TO ADMIN PAGE <span style="color: #F9A826">- LOST AND FOUND</span>
            </h2>
            <div class="row roww-m">
                <div class="col-sm-4">
                    <a href="<?= base_url('admin/user_list'); ?>" class="text-decoration-none">
                        <img src="assets/img/security.png" class="row-img" alt="security" />
                        <p class="desc-name text-decoration-none" style="color: #212529;">Informasi/Daftar User</p>
                    </a>
                    <p class="desc-paraf">
                        Akses kesemua data dan informasi user yang terdaftar. Lakukan <a href=<?= base_url('admin/user_list'); ?> class="">Edit</a> atau <a href=<?= base_url('admin/user_list'); ?> class="">Delete</a> user serta aksi lainnya.
                    </p>
                </div>
                <div class="col-sm-4">
                    <a href="<?= base_url('admin'); ?>" class="text-decoration-none">
                        <img src="assets/img/support.png" class="row-img" alt="security" />
                        <p class="desc-name text-decoration-none" style="color: #212529;">Informasi Barang Hilang</p>
                    </a>
                    <p class="desc-paraf">
                        Lihat dan kelola informasi barang hilang yang dilaporkan oleh para user.
                    </p>
                </div>
                <div class="col-sm-4">
                    <a href="<?= base_url('admin'); ?>" class="text-decoration-none">
                        <img src="assets/img/location.png" class="row-img" alt="security" />
                        <p class="desc-name text-decoration-none" style="color: #212529;">Informasi Barang Ditemukan</p>
                    </a>
                    <p class="desc-paraf">
                        Lihat dan kelola informasi barang yang ditemukan oleh para user yang terdaftar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block container-m" style="background-color: #fafafa">
        <div class="container">
            <h1 style="margin-top: 1rem; padding-top: 1rem; text-align: center; font-weight: 700;">
                #LOSTAND<span class="head-color">FOUND</span> UNTUK KEBAIKAN
            </h1>
        </div>
    </div>
</body>

</html>