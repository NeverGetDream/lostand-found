<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>favicon.ico" />
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/navs/navbar_global.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/footer/footer.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/globalstyle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/home.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/tentang.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url('components/'); ?>bootstrap.bundle.js"></script>
    <title><?= $title ?></title>

    <style>
        .profile-icon {
            width: 40px;
            margin-top: 25px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="pt-5">
            <link href="<?= base_url('assets/barang/css/') ?>cards.css" rel="stylesheet">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-3" style="padding-right: 20px; padding-top: 10px;">
                    <div style="display: block">
                        <img class="rounded-3" src="<?= base_url('image/barang/hilang/') . $data['img_name'] ?>" style="width: 300px;" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 mt-3">
                    <h4 style="font-weight: 700; font-size: 35px;"><?= $data['nama_barang'] ?></h4>
                    <hr />
                    <div>
                        <h5 style="font-weight: 500">
                            <span class="head-color">Detail</span>
                            Barang
                        </h5>
                        <hr />
                        <?php
                            $sub_des = substr($data['des_barang'], 0, 60);
                        ?>

                        <div>
                            <pre class="info-text-pg">Penemu		: <?= $first_name ?></pre>
                            <pre class="info-text-pg">Kategori		: <?= $data['kategori'] ?></pre>
                            <pre class="info-text-pg">Lokasi		: <?= $data['lokasi'] ?></pre>
                            <pre class="info-text-pg">Kota			: <?= $data['kota'] ?></pre>
                            <pre class="info-text-pg">Provinsi		: <?= $data['provinsi'] ?></pre>
                            <pre class="info-text-pg">Deskripsi		: <?= $sub_des ?>...</pre>
                        </div>
                    </div>
                    <hr />

                    <div>
                        <h5 style="font-weight: 500">
                            Informasi <span class="head-color">Penemu</span>
                        </h5>
                        <hr />
                        <div style="padding-left: 10px; padding-right: 10px; display: flex">
                            <a href="">
                                <img class="rounded-circle" src="<?= base_url('assets/img/profile/') . $image ?>" style="width: 70px; height: 70px" />
                            </a>
                            <div>
                                <div style="margin-left: 30px; padding-top: 6px;">
                                    <h5 style="font-weight: 600; font-size: 24px;"><?= $first_name ?></h5>
                                    <p><?= $kota ?></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <pre class="info-text-pg">Nama		: <?= $first_name . ' ' . $last_name ?></pre>
                            <pre class="info-text-pg">No Hp		: <?= $no_hp ?></pre>
                            <pre class="info-text-pg">Alamat		: <?= $alamat ?></pre>
                            <pre class="info-text-pg">Kota			: <?= $kota ?></pre>
                            <pre class="info-text-pg">Provinsi		: <?= $prov ?></pre>
                        </div>
                    </div>
                    <hr />
                </div>

                <div class="col-sm-3 col-md-3">
                    <div>
                        <h4 style="font-weight: 600; font-size: 20px; padding-top: 35px;">Upload bukti kepemilikan Anda!</h4>
                    </div>
                    <hr />
                    <form action=<?= base_url('barang/upVerifFile') ?> method="POST" enctype="multipart/form-data">
                        <div class="pb-4">
                            <label class="form-label" for="customFile">Upload 1 sampai 5 bukti!</label>
                            <label class="form-label" for="customFile">Berikan minimal 1 informasi diri sendiri.</label>
                            <div>
                                <input name="id_barang" type="hidden" value="<?=$data['id_barang']?>" /><br>
                                <input name="imgA" type="file" class="form-control form-control-sm" id="file_1" oninput="view2()" /><br>
                                <input name="imgB" type="hidden" class="form-control form-control-sm" id="file_2" oninput="view3()" /><br>
                                <input name="imgC" type="hidden" class="form-control form-control-sm" id="file_3" oninput="view4()" /><br>
                                <input name="imgD" type="hidden" class="form-control form-control-sm" id="file_4" oninput="view5()" /><br>
                                <input name="imgE" type="hidden" class="form-control form-control-sm" id="file_5" />
                            </div>
                        </div>
                        <button class="btn btn-dark btn-sm btn-block disabled" type="submit" id="sub_but">Minta Konfirmasi</button>
                    </form>
                    <script>
                        function view2(){
                            var b = document.getElementById('file_2');
                            var but = document.getElementById('sub_but');
                            b.setAttribute('type', 'file');
                            but.setAttribute('class', 'btn btn-dark btn-sm btn-block');
                        }
                        function view3(){
                            var c = document.getElementById('file_3');
                            c.setAttribute('type', 'file');
                        }
                        function view4(){
                            var d = document.getElementById('file_4');
                            d.setAttribute('type', 'file');
                        }
                        function view5(){
                            var e = document.getElementById('file_5');
                            e.setAttribute('type', 'file');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>