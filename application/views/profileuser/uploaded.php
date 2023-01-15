<head>
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
</head>

<body>
    <div style="padding-top: 120px; padding-bottom: 20px;" class="container">
        <div class="row">
            <div class="col-md-10" style="padding-right: 50px;">
                <h2>Azwar kasih text apa bagus di sini!</h2>
            </div>
            <div class="col-md-2" style="padding-right: 50px;">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $kat_select ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                        if($kat_select != 'Kategori'){
                            echo '
                                <a class="dropdown-item" href="'. base_url('profile/uploaded/0') .'">Tampilkan Semua</a>
                            ';
                        }
                        foreach ($kat as $k) {
                            if($kat_select == $k['kategori']){
                                continue;
                            }
                            echo '
                                <a class="dropdown-item" href="' . base_url('profile/uploaded/') . $k['nomor'] . '">' . $k['kategori'] . '</a>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Conten -->
    <link href="<?= base_url('assets/barang/css/') ?>cards.css" rel="stylesheet">
    <div class="container">
        <!-- Chuaks -->
        <section class="wrapper">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach ($updata as $row) {
                                $des = substr($row['des_barang'], 0, 25);
                                $nama = $row['first_name'] . ' ' . $row['last_name'];
                                echo '
                                    <div class="col-1 col-sm-6 col-md-4 col-lg-3 mb-2">
                                        <div class="card body-text">
                                            <a class="img-card" href="' . base_url('image/barang/hilang/') . $row['img_name'] . '" target="blank">
                                                <img src="' . base_url('image/barang/hilang/') . $row['img_name'] . '" />
                                            </a>
                                            <a href="" class="card-main-text body-text open-modal" style="height: 170px">
                                                <div class="card-content">
                                                    <h4 class="card-title" id="card-head">' . $row['nama_barang'] . '</h4>
                                                    <p class="card-tittle card-row"> Kategori: ' . $row['kategori'] . '</p>
                                                    <p class="card-tittle card-row">Lokasi : ' . $row['lokasi'] . '</p>
                                                    <p class="card-row">' . $des . '.....</p>
                                                </div>
                                            </a>
                                            <button class="btn btn-more-info" data-toggle="modal" data-target="#InfoModal' . $row['id_barang'] . '">Selengkapnya...</button>
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
                                                                <td style="width: auto;">' . $nama . '</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Kategori </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">' . $row['kategori'] . '</td>
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
                                                                <td style="width: 30%;">Dititip di </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">' . $row['temp_titip'] . '</td>
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
</body>