<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="assets/css/navs/navbar_global.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/footer/footer.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/globalstyle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/home.css" rel="stylesheet" type="text/css" />
    <script src="components/bootstrap.bundle.js"></script>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/image-up.css">
    <script src="components/bootstrap.bundle.js"></script>
    <title>FOUND - INFO</title>
</head>

<body style="background-color: #f9a826">
    <!--NAVBAR-->
    <header>
        <div class="logo">
            <a href="home.php"><img src="assets/img/lostlogo.png" class="logo" alt="logo" /></a>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="home.php" class="active">HOME</a></li>
                <li><a href="temukan-barang.php" class="active">TEMUKAN BARANG</a></li>
                <li><a href="help.php" class="active">BANTUAN</a></li>
                <li><a href="tentang.php" class="active">TENTANG KAMI</a></li>
                <li><a href="hubungi.php" class="active">HUBUNGI KAMI</a></li>
                <li><a href="login.php" class="masuk">MASUK</a></li>
                <li><a href="register.php" class="register">DAFTAR</a></li>
            </ul>
        </nav>
    </header>
    <script src="components/navbar.js"></script>
    <script src="components/navbar-sticky.js"></script>


    <section class="vh-100 pt-6" style="background-color: #f9a826">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem">
                        <div class="row g-0">
                            <!-- Image Upload Section -->
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <div class="Neon Neon-theme-dragdropbox pt-7 d-block mx-auto" style="padding-left: 30px;">
                                    <input
                                        style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;"
                                        name="files[]" id="filer_input2" multiple="multiple" type="file">
                                    <div class="Neon-input-dragDrop">
                                        <div class="Neon-input-inner">
                                            <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div>
                                            <div class="Neon-input-text">
                                                <h3>Drag&amp;Drop files here</h3> <span
                                                    style="display:inline-block; margin: 15px 0">or</span>
                                            </div><a class="Neon-input-choose-btn blue">Browse Files</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Informasi Penemu Section -->
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form>
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="bi bi-search-heart-fill"
                                                style="font-size: 30px; color: #f9a826"></i>
                                            <span class="h1 fw-bold mb-0">FOUND - INFO</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                                            Informasi mengenai barang yang ditemukan
                                        </h5>

                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-12">
                                                <label class="form-label" for="fname">Nama Penemu</label>
                                                <input type="text" id="fname" class="form-control form-control-lg"
                                                    placeholder="Nama Penemu" />
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="fname">Lokasi ditemukan</label>
                                            <input type="text" id="lokasi" class="form-control form-control-lg"
                                                placeholder="Lokasi Ditemukan" />
                                        </div>

                                        <div class="form-outline mb-4 col-sm-12">
                                            <label class="form-label" for="desc">Deskripsi barang</label>
                                            <textarea class="form-label form-control" name="desc" id="desc" cols="30"
                                                rows="6"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="provinsi">Provinsi</label>
                                                <select name="Provinsi" class="form-select form-select-lg">
                                                    <option value="sulsel">Sulawesi Selatan</option>
                                                    <option value="sulteng">Sulawesi Tengah</option>
                                                    <option value="sulbar">Sulawesi Barat</option>
                                                    <option value="sulut">SUlawesi Utara</option>
                                                </select>
                                            </div>
                                            <div class="form-outline mb-4 col-sm-6">
                                                <label class="form-label" for="kota">Kota</label>
                                                <input type="text" id="kota" class="form-control form-control-lg"
                                                    placeholder="Asal Kota" />
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="place-nitip">Tempat dititipkan</label>
                                            <input type="text" id="place" class="form-control form-control-lg"
                                                placeholder="Tempat barang dititipkan" />
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="button">
                                                Submit
                                            </button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81">
                                            Tidak tau apa yang Anda lakukan?
                                            <a href="help.php" style="color: #393f81"> Help!</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>