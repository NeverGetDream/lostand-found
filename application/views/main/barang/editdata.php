<html>

<head>
    <link href="<?= base_url('assets/'); ?>css/image-up.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/') ?>profilestyle.css"> -->

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

        .head-tx {
            color: #f9a826;
        }

        .tx-main {
            color: #f9a826;
            font-size: larger;
        }

        .img-hint {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18pt;
            color: #f9a826;
            text-align: center !important;
        }

        .in-file {
            opacity: 0;
        }

        .change-img-but {
            width: 150px;
            border-color: #f9a826;
            background-color: #fff;
        }

        .main-but:hover {
            background-color: rgba(249, 168, 38, 0.8) !important;
            color: #fff !important;
            border: #f9a826 !important;
        }
    </style>
</head>

<body style="background-color: #f9a826">
    <section class="vh-100" style="background-color: #f9a826;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <form action=<?= base_url('barang/saveEdit') ?> method="POST" enctype="multipart/form-data">
                        <div class="card mb-4" style="border-radius: 1rem">
                            <div class="row g-0">
                                <!-- Form -->

                                <!-- Sumber Data Management -->
                                <?php
                                if ($source == 'db') {
                                    $val_id_barang = $databarang['id_barang'];
                                    $val_nama_barang = $databarang['nama_barang'];
                                    $val_lokasi = $databarang['lokasi'];
                                    $val_id_kat = $databarang['id_kategori'];
                                    $val_desc = $databarang['des_barang'];
                                    $val_temp_titip = $databarang['temp_titip'];
                                    $val_id_prov = $databarang['id_prov'];
                                    $val_kota = $databarang['kota'];
                                    $val_img_name = $databarang['img_name'];
                                }
                                elseif($source == 'form_validation'){
                                    $val_id_barang = set_value('id_barang');
                                    $val_nama_barang = set_value('nama_barang');
                                    $val_lokasi = set_value('lokasi');
                                    $val_id_kat = set_value('id_kat');
                                    $val_desc = set_value('desc');
                                    $val_temp_titip = set_value('place');
                                    $val_id_prov = set_value('id_prov');
                                    $val_kota = set_value('kota');
                                    $val_img_name = $img;
                                }
                                ?>


                                <!-- Image Upload Section -->
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <div class="pt-6">
                                        <div class="mx-auto d-block pt-4">
                                            <img src="<?= base_url('image/barang/hilang/').$val_img_name ?>" id="output" width="70%" class="mx-auto d-block img-preview" />
                                        </div>

                                        <div class="pt-4">
                                            <button type="button" class="mx-auto d-block change-img-but">
                                                <label class="img-hint" for="file">
                                                    <h2 class="img-hint">Ubah Foto</h2>
                                                </label>
                                            </button>

                                            <input name="image" id="file" type="file" onchange="loadFile(event)" class="in-file" />

                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById("output");
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <!-- Informasi Penemu Section -->
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i>
                                            <span class="h1 fw-bold mb-0">FOUND - INFO</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                                            Edit informasi mengenai barang yang ditemukan!
                                        </h5>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-12">
                                                <label class="form-label" for="nama_barang">Nama Barang</label>
                                                <input type="text" id="nama_barang" name="nama_barang" class="form-control form-control-lg" placeholder="Nama Barang" value="<?= $val_nama_barang ?>" />
                                                <small class="text-danger"><?= form_error('nama_barang') ?></small>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="lokasi">Lokasi ditemukan</label>
                                            <input type="text" id="lokasi" name="lokasi" class="form-control form-control-lg" placeholder="Lokasi Ditemukan" value="<?= $val_lokasi ?>" />
                                            <small class="text-danger"><?= form_error('lokasi') ?></small>
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="id_kategori">Kategori Barang</label>
                                            <select name="id_kat" class="form-select form-select-lg">
                                                <?php
                                                foreach ($kat as $kategori) {
                                                    $no = $kategori['nomor'];
                                                    $k = $kategori['kategori'];

                                                    if ($val_id_kat == $no) {
                                                        echo '<option value="' . $no . '" selected>' . $k . '</option>';
                                                        continue;
                                                    }
                                                    echo '
                                                        <option value="' . $no . '">' . $k . '</option>
                                                    ';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="desc">Deskripsi barang</label>
                                            <textarea class="form-label form-control" name="desc" id="desc" cols="30" rows="6"><?= $val_desc ?></textarea>
                                            <small class="text-danger"><?= form_error('desc') ?></small>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="place-nitip">Tempat dititipkan</label>
                                            <input type="text" id="place" name="place" class="form-control form-control-lg" placeholder="Tempat barang dititipkan" value="<?= $val_temp_titip ?>" />
                                            <small class="text-danger"><?= form_error('place') ?></small>
                                        </div>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="id_prov">Provinsi</label>
                                                <select name="id_prov" class="form-select form-select-lg">
                                                    <?php
                                                    foreach ($prov as $provinsi) {
                                                        if ($val_id_prov == $provinsi['nomor']) {
                                                            echo '<option value="' . $provinsi['nomor'] . '" selected>' . $provinsi['provinsi'] . '</option>';
                                                            continue;
                                                        }
                                                        echo '
                                                        <option value="' . $provinsi['nomor'] . '">' . $provinsi['provinsi'] . '</option>
                                                    ';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="kota">Kota</label>
                                                <input type="text" id="kota" name="kota" class="form-control form-control-lg" placeholder="Asal Kota" value="<?= $val_kota ?>" />
                                                <small class="text-danger"><?= form_error('kota') ?></small>
                                            </div>
                                        </div>

                                        <!-- Hidden Input -->
                                        <input type="hidden" id="id_barang" name="id_barang" value="<?= $val_id_barang ?>" />

                                        <!-- Submit -->
                                        <div class="pt-1 mb-4">
                                            <a href="<?= base_url('profile/uploaded/0') ?>" style="text-decoration: none;">
                                                <button class="btn btn-dark btn-md btn-block" type="button">
                                                    Batal
                                                </button>
                                            </a>
                                            <button class="btn btn-dark btn-md btn-block" type="submit">
                                                Simpan
                                            </button>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>