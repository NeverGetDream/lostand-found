<link href="<?= base_url('assets/'); ?>css/navs/pagination.css" rel="stylesheet" type="text/css" />
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Barang yang ditemukan pengguna</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-warning">Daftar Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Penemu</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                            <th>Tempat dititipkan</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    echo '<pre>'; print_r($list); echo '</pre>'; die();
                        foreach ($list as $row) {
                            ?>
                            <tr>
                                <td><?= ++$start; ?></td>
                                <td><?= $row['id_barang']; ?></td>
                                <td><?= $row['nama_barang']; ?></td>
                                <td><?= $row['']; ?></td>
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