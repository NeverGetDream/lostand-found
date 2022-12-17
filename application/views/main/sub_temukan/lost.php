<head>
    <link rel="stylesheet" href="<?= base_url('assets/cards/css/') ?>lost.css">
</head>

<body>
    <div>
        <!-- Konten -->
        <div>
            <!-- Chuaks -->
            <section class="wrapper">
                <div class="container-fostrap">
                    <div class="content">
                        <div class="container" style="padding-top:100px;">
                            <div class="row">
                                <!-- Card -->
                                <?php
                                    foreach ($barang as $row){
                                        $full_desc = $row['des_barang'];
                                        $desc = substr($full_desc, 0, 35);
                                        echo '
                                            <div class="col-1 col-sm-6 col-md-3 mb-2">
                                                <div class="card body-text">
                                                    <a class="img-card" href="' .base_url('image/barang/hilang/').$row['img_name'] .'" target="blank">
                                                        <img src="' .base_url('image/barang/hilang/').$row['img_name'] .'" />
                                                    </a>
                                                    <a href="'. base_url('/main/lostdetail/').$row['id_barang'] .'" class="card-main-text body-text">
                                                        <div class="card-content">
                                                            <h4 class="card-title" id="card-head">'. $row['nama_barang'] .'</h4>
                                                            <p class="card-tittle card-row">Lokasi : '. $row['lokasi'] .'</p>
                                                            <p class="card-row">'. $desc .' ....</p>
                                                        </div>
                                                    </a>
                                                    <div class="card-read-more" id="read">
                                                        <a href="'. base_url('/main/lost_/').$row['id_barang'] .'" class="btn btn-link btn-block">Ini Punyaku!</a>
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
    </div>
</body>