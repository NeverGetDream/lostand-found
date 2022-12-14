<html>

<head>
    <link href="<?= base_url('assets/'); ?>css/image-up.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-color: #f9a826">
    <section class="vh-100 pt-6" style="background-color: #f9a826; margin-bottom: 400px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <form action=<?= base_url('Main/foundinput'); ?> method="POST" enctype="multipart/form-data">
                        <div class="card mb-4" style="border-radius: 1rem">
                            <div class="row g-0">
                                <!-- Form -->
                                <!-- Image Upload Section -->
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <div class="Neon Neon-theme-dragdropbox pt-7 d-block mx-auto" style="padding-left: 30px;">
                                        <!-- Input Foto -->
                                        <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="image" id="image" type="file" accept="image/*" onchange="loadFile(event)">

                                        <div class=" Neon-input-dragDrop">
                                            <div class="Neon-input-inner">
                                                <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div>
                                                <div class="Neon-input-text">
                                                    <h3>Klik atau drop gambar di sini!</h3>
                                                </div>
                                                <img style="width: 250px; height: auto; margin-top: 15px;" id="output" />
                                                <script>
                                                    var loadFile = function(event) {
                                                        var output = document.getElementById('output');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                        output.onload = function() {
                                                            URL.revokeObjectURL(output.src) // free memory
                                                        }
                                                    };
                                                </script>
                                                <style>
                                                    .browse-file:hover {
                                                        background-color: #f9a826;
                                                        color: #fff;
                                                    }
                                                    .browse {
                                                        border: 1px solid #f9a826;
                                                        color: #f9a826;
                                                    }
                                                </style>
                                                <a class="Neon-input-choose-btn browse browse-file" style="margin-top: 20px;">Browse Files</a>

                                            </div>

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
                                            Informasi mengenai barang yang ditemukan
                                        </h5>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-12">
                                                <label class="form-label" for="nama_barang">Nama Barang</label>
                                                <input type="text" id="nama_barang" name="nama_barang" class="form-control form-control-lg" placeholder="Nama Barang" />
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="lokasi">Lokasi ditemukan</label>
                                            <input type="text" id="lokasi" name="lokasi" class="form-control form-control-lg" placeholder="Lokasi Ditemukan" />
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="id_kategori">Kategori Barang</label>
                                            <select name="id_kat" class="form-select form-select-lg">
                                                <?php
                                                foreach ($kat as $kategori) {
                                                    $no = $kategori['nomor'];
                                                    $k = $kategori['kategori'];
                                                    echo '
                                                        <option value="' . $no . '">' . $k . '</option>
                                                    ';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="desc">Deskripsi barang</label>
                                            <textarea class="form-label form-control" name="desc" id="desc" cols="30" rows="6"></textarea>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="place-nitip">Tempat dititipkan</label>
                                            <input type="text" id="place" name="place" class="form-control form-control-lg" placeholder="Tempat barang dititipkan" />
                                        </div>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="id_prov">Provinsi</label>
                                                <select name="id_prov" class="form-select form-select-lg">
                                                    <?php
                                                    foreach ($prov as $provinsi) {
                                                        echo '
                                                        <option value="' . $provinsi['nomor'] . '">' . $provinsi['provinsi'] . '</option>
                                                    ';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="kota">Kota</label>
                                                <input type="text" id="kota" name="kota" class="form-control form-control-lg" placeholder="Asal Kota" />
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">
                                                Submit
                                            </button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81">
                                            Tidak tau apa yang Anda lakukan?
                                            <a href=<?= base_url('main/help'); ?> style="color: #393f81"> Klik di sini!</a>
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