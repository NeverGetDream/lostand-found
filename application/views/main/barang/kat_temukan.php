<head>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>favicon.ico" />
    <link href="<?= base_url('assets/'); ?>css/footer/footer.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/navs/navbar_global.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/globalstyle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('components/'); ?>bootstrap.bundle.js" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/cards/css/lost.css">
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
</head>

<body>
    <div style="padding-top: 120px; padding-bottom: 20px;" class="container">
        <div class="row container">
            <!-- Col1 -->
            <div class="col-md-8 col-sm-8 col-lg-7" style="padding-bottom: 8px;">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search" style="border-color: #f9a826;" />
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <!-- Col2 -->
            <div class="col-md-4 col-sm-4 col-lg-1" style="padding-right: 50px;">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        echo $filter[0]['kategori'];
                        ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: fit-content;">
                        <a class="dropdown-item" href="<?= base_url('main/barang') ?>">Tampilkan Semua</a>
                        <?php
                        foreach ($kat as $k) {
                            echo '
                                <a class="dropdown-item" href="' . base_url('main/barang_kat/') . $k['nomor'] . '">' . $k['kategori'] . '</a>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Col3 -->
            <link href="<?= base_url('assets/barang/css/') ?>uploadstyle.css" rel="stylesheet">
            <div class="col-md-12 col-sm-12 col-lg-4">
                <div style="padding-top: 6px; padding-left: 10px;">
                    <p id="uptext" style="padding-left: 20px;">
                        Menemukan barang?
                        <a href="<?= base_url('main/found') ?>" id="upfile">UPLOAD</a>
                    </p>
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
                            <!-- disini nanti looping -->
                            <?php
                            foreach ($k_barang as $row) {
                                $des = substr($row['des_barang'], 0, 25);
                                $nama = $row['first_name'].' '.$row['last_name'];
                                echo '
                                    <div class="col-1 col-sm-6 col-lg-3 mb-2">
                                        <div class="card body-text">
                                            <a class="img-card" href="' . base_url('image/barang/hilang/') . $row['img_name'] . '" target="blank">
                                                <img src="' . base_url('image/barang/hilang/') . $row['img_name'] . '" />
                                            </a>
                                            <a href="" class="card-main-text body-text open-modal" style="height: 170px">
                                                <div class="card-content">
                                                    <h4 class="card-title" id="card-head">' . $row['nama_barang'] . '</h4>
                                                    <p class="card-tittle card-row">Kategori : ' . $row['kategori'] . '</p>
                                                    <p class="card-tittle card-row">Lokasi : ' . $row['lokasi'] . '</p>
                                                    <p class="card-row">' . $des . '.....</p>
                                                </div>
                                            </a>
                                            <button class="btn btn-more-info" data-toggle="modal" data-target="#InfoModal' . $row['id_barang'] . '">Selengkapnya...</button>
                                            <div class="card-read-more" id="read">
                                                <a href="#" class="btn btn-link btn-block">INI PUNYAKU!</a>
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
                                                                <td style="width: auto;">'. $nama .'</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Kategori </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">'. $row['kategori'] .'</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Deskripsi </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">'. $row['des_barang'] .'</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Lokasi </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">'. $row['lokasi'] .'</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Dititip di </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">'. $row['temp_titip'] .'</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Kota </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">'. $row['kota'] .'</td>
                                                            </tr>
                                                            <tr style="text-align: left;">
                                                                <td style="width: 30%;">Provinsi </td>
                                                                <td style="width: 2%;">: </td>
                                                                <td style="width: auto;">'. $row['provinsi'] .'</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
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