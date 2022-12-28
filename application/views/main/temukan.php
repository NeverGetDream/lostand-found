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

<style>
    .filter-select{
        border-color: #f9a826 !important;
    }
</style>

<body>
    <div style="padding-top: 120px; padding-bottom: 20px;" class="container">
        <div class="row container">
            <!-- Col1 -->
            <div class="col-md-12 col-sm-12 col-lg-9" style="padding-bottom: 8px;">
                <div class="container-fluid">
                    <form class="d-flex" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Cari barang Anda di sini" aria-label="Search" style="border-color: #f9a826;" style="width: 60%;"/>
                        <select name="id_kat" class="form-select form-select-md me-2 filter-select" style="width: 20%;">
                            <option value="1">Kat 1</option>
                        </select>
                        <select name="id_prov" class="form-select form-select-md me-2 filter-select" style="width: 20%;">
                            <option value="1">Prov 1</option>
                        </select>
                        <button class="btn btn-outline-warning" type="submit">Cari</button>
                    </form>
                </div>
            </div>
            <!-- Col2 -->
            <link href="<?= base_url('assets/barang/css/') ?>uploadstyle.css" rel="stylesheet">
            <div class="col-md-12 col-sm-12 col-lg-3">
                <div style="padding-top: 6px; padding-left: 10px;">
                    <p id="uptext">
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
                            foreach ($barang as $row) {
                                $des = substr($row['des_barang'], 0, 45);
                                echo '
                                    <div class="col-1 col-sm-6 col-md-4 col-lg-3 mb-2">
                                        <div class="card body-text">
                                            <a class="img-card" href="' . base_url('image/barang/hilang/') . $row['img_name'] . '" target="blank">
                                                <img src="' . base_url('image/barang/hilang/') . $row['img_name'] . '" />
                                            </a>
                                            <a href="" class="card-main-text body-text open-modal" style="height: 170px">
                                                <div class="card-content">
                                                    <h4 class="card-title" id="card-head">' . $row['nama_barang'] . '</h4>
                                                    <p class="card-tittle card-row">Lokasi : ' . $row['lokasi'] . '</p>
                                                    <p class="card-row">' . $des . '.....</p>
                                                </div>
                                            </a>
                                            <button class="btn btn-more-info">Selengkapnya...</button>
                                            <div class="card-read-more" id="read">
                                                <a href="#" class="btn btn-link btn-block">INI PUNYAKU!</a>
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