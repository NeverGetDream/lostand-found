<link href="<?= base_url('assets/'); ?>css/navs/pagination.css" rel="stylesheet" type="text/css" />
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Nama depan</th>
                            <th>Nama Belakang</th>
                            <th>Email</th>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $row) {
                            if ($row['is_active'] == 1) {
                                $status = 'Aktif';
                            } else {
                                $status = 'Tidak Aktif';
                            }

                            // Cek Role
                            if ($row['role_id'] == 1) {
                                $role = 'User';
                            } else if ($row['role_id'] == 2) {
                                $role = 'Admin';
                            } ?>
                            <tr>
                                <td><?= ++$start; ?></td>
                                <td><?= $row['user_id']; ?></td>
                                <td><?= $row['first_name']; ?></td>
                                <td><?= $row['last_name']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['provinsi']; ?></td>
                                <td><?= $row['kota']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $status ?></td>
                                <td><?= $role; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>