<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile Admin</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters m-5">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img rounded-circle">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <h5 class="card-title">Nama: <?= $user['first_name']; ?> <?= $user['last_name']; ?></h5>
                    <hr class=" d-none d-md-block" />
                    <p class="card-text"> Email: <?= $user['email']; ?></p>
                    <hr class=" d-none d-md-block" />
                    <p class="card-text">Provinsi: <?= $user['provinsi']; ?></p>
                    <hr class=" d-none d-md-block" />
                    <p class="card-text">Kota: <?= $user['kota']; ?></p>
                    <hr class=" d-none d-md-block" />
                    <p class="card-text">Alamat: <?= $user['alamat']; ?></p>
                    <hr class=" d-none d-md-block" />
                    <p class="card-text"><small class="text-muted">Member sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->