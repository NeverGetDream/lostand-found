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
                        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <!-- Col2 -->
            <div class="col-md-4 col-sm-4 col-lg-1" style="padding-right: 50px;">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Kat 1</a>
                    </div>
                </div>
            </div>
            <!-- Col3 -->
            <link href="<?= base_url('assets/barang/css/') ?>uploadstyle.css" rel="stylesheet">
            <div class="col-md-12 col-sm-12 col-lg-4">
                <div style="padding-top: 6px; padding-left: 10px;">
                    <p id="uptext">
                        Menemukan barang atau lainnya?
                        <a href="<?= base_url('main/upload'); ?>" id="upfile">UPLOAD</a>
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
                            <!-- Card -->
                            <div class="col-1 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card body-text">
                                    <a class="img-card" href="" target="blank">
                                        <img src="" />
                                    </a>
                                    <a href="" class="card-main-text body-text open-modal">
                                        <div class="card-content">
                                            <h4 class="card-title" id="card-head">Barang 1</h4>
                                            <p class="card-tittle card-row">Lokasi : Lokasi 1</p>
                                            <p class="card-row">Barang ini blas ajsa igsf.....</p>
                                        </div>
                                    </a>
                                    <button class="btn btn-more-info">Selengkapnya...</button>
                                    <div class="card-read-more" id="read">
                                        <a href="#" class="btn btn-link btn-block">INI PUNYAKU!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>