<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script src="components/bootstrap.bundle.js"></script>
  <title>Register | LOSTANDFOUND</title>
</head>

<body style="background-color: #f9a826;">
  <section class="vh-100" style="background-color: #f9a826;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="assets/img/loginpict.png" alt="login form" class="img-fluid" style="margin-top: 200px" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form>
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i>
                      <span class="h1 fw-bold mb-0">LOST&FOUND</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                      Daftar akun
                    </h5>

                    <div class="row">
                      <div class="form-outline mb-4 col-sm-6">
                        <label class="form-label" for="fname">Nama Depan</label>
                        <input type="text" id="fname" class="form-control form-control-lg" placeholder="Nama Depan" />
                      </div>
                      <div class="form-outline mb-4 col-sm-6">
                        <label class="form-label" for="bname">Nama Belakang</label>
                        <input type="text" id="bname" class="form-control form-control-lg" placeholder="Belakang" />
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email address</label>
                      <input type="email" id="email" class="form-control form-control-lg" placeholder="Alamat Email" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" id="password" class="form-control form-control-lg"
                        placeholder="Password" />
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
                        <input type="text" id="kota" class="form-control form-control-lg" placeholder="Asal Kota" />
                      </div>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="kota">Alamat</label>
                      <input type="text" id="alamat" class="form-control form-control-lg" placeholder="Alamat" />
                    </div>
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="button">
                        Daftar
                      </button>
                    </div>

                    <p class="mb-5 pb-lg-2" style="color: #393f81">
                      Sudah memiliki akun?
                      <a href="login.php" style="color: #393f81">Masuk disini!</a>
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