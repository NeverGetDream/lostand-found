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
                        <tr style="text-align: center;">
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
                            <th>Lihat gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $row) {
                            $nama = $row['first_name'] . ' ' . $row['last_name'];
                            $full_des = $row['des_barang'];
                            $desc = substr($full_des, 0, 45);
                        ?>
                            
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $row['id_barang']; ?></td>
                            <td><?= $row['nama_barang']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= $nama; ?></td>
                            <td><?= $desc ?>....</td>
                            <td><?= $row['lokasi'] ?></td>
                            <td><?= $row['temp_titip'] ?></td>
                            <td><?= $row['kota'] ?></td>
                            <td><?= $row['provinsi'] ?></td>
                            <td style="text-align: center;">
                                <a href="<?= base_url('admin/listViewImage/') . $row['img_name'] ?>" target="blank">
                                    <img src="<?= base_url('image/barang/hilang/') . $row['img_name'] ?>" alt="" width="40px" style="margin: 10px;">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="">
                                    <img src="<?= base_url('assets/img/') ?>edit.png" width="30px" alt="" style="margin: 10px;">
                                </a>
                                <a href="" data-toggle="modal" data-target="#deleteModal<?= $row['id_barang'] ?>">
                                    <img src="<?= base_url('assets/img/') ?>delete.png" width="30px" alt="" style="margin: 10px;">
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="deleteModal<?= $row['id_barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ingin menghapus?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Barang yang telah dihapus tidak akan bisa dikembalikan.
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-warning" href="<?= base_url('admin/deleteBarang/').$row['id_barang'] ?>">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>

