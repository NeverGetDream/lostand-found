<!-- Main Conten -->
<link href="<?= base_url('assets/barang/css/') ?>cards.css" rel="stylesheet">
<div class="container" style="padding-top: 100px;">
    <!-- Chuaks -->
    <section class="wrapper">
        <div class="container-fostrap">
            <div class="">
                <h2 style="color: #F9A826;">Daftar Permintaan verivikasi Anda</h2>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <?php
                        // echo '<pre>'; print_r($data); echo '</pre>'; die();

                        foreach ($data as $row) {
                            echo '
                                <div class="col-1 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card body-text">
                                        <a class="img-card" href="'. base_url('image/barang/hilang/').$row['img_name'] .'" target="blank">
                                            <img src="'. base_url('image/barang/hilang/').$row['img_name'] .'" />
                                        </a>
                                        <a href="" class="card-main-text body-text open-modal" style="height: 170px">
                                            <div class="card-content">
                                                <h4 class="card-title" id="card-head">'. $row['nama_barang'] . '</h4>
                                                <p class="card-tittle card-row">Penemu : ' . $row['first_name'] . '</p>
                                                <p class="card-tittle card-row">Status : '. $row['status_req'] .'</p>
                                            </div>
                                        </a>
                                        <div class="card-read-more" id="read">
                                            <a href="" class="btn btn-link btn-block">INI PUNYAKU!</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" style="margin-top:80px; padding-bottom: 80px;" id="InfoModal' . $row['id_barang'] . '" tabindex="-1" role="dialog" aria-labelledby="SelengkapModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="SelengkapModal">Informasi Lengkap</h5>
                                        </div>
                                        <div class="modal-body">
                                            <h4 class="card-title" id="card-head">' . $row['nama_barang'] . '</h4>
                                            <div><img src="' . base_url('image/barang/hilang/') . $row['img_name'] . '" width="95%" style="border-radius: 10px; margin: 10px;"></div>
                                            <div>
                                                <table class="table rounded-2">
                                                    <tbody>
                                                        <tr style="text-align: left;">
                                                            <td style="width: 30%;">Penemu </td>
                                                            <td style="width: 2%;">: </td>
                                                            <td style="width: auto;">' . $row['first_name'] . '</td>
                                                        </tr>
                                                        <tr style="text-align: left;">
                                                            <td style="width: 30%;">Deskripsi </td>
                                                            <td style="width: 2%;">: </td>
                                                            <td style="width: auto;">' . $row['des_barang'] . '</td>
                                                        </tr>
                                                        <tr style="text-align: left;">
                                                            <td style="width: 30%;">Lokasi </td>
                                                            <td style="width: 2%;">: </td>
                                                            <td style="width: auto;">' . $row['lokasi'] . '</td>
                                                        </tr>
                                                        <tr style="text-align: left;">
                                                            <td style="width: 30%;">Kota </td>
                                                            <td style="width: 2%;">: </td>
                                                            <td style="width: auto;">' . $row['kota'] . '</td>
                                                        </tr>
                                                        <tr style="text-align: left;">
                                                            <td style="width: 30%;">Provinsi </td>
                                                            <td style="width: 2%;">: </td>
                                                            <td style="width: auto;">' . $row['provinsi'] . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <a href="'. base_url('barang/edit/').$row['id_barang'] .'">
                                                <button class="btn btn-secondary" type="button" href="tes">Edit</button>
                                            </a>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#delete'. $row['id_barang'] .'">Hapus</button>


                                        </div>


                                        
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="delete'.$row['id_barang'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 80px;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus data tersebut?</h5>
                                                    </div>
                                                    <div class="modal-body">Peringatan! Data yang dihapus tidak dapat dikembalikan.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                        <a class="btn btn-warning" href="'. base_url('barang/delete/').$row['id_barang'] .'">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>