<div class="container section">
      <div class="mt-5">
        <div class="row">
        <?php 
          foreach ($barang as $row) {
            $nama = $row['first_name'].' '.$row['last_name'];
            $profile_pict = $row['image'];
            echo '
          <div class="col-sm-3" style="padding-right: 20px">
            <div style="display: block">
              <img
                class="rounded-3"
                src="' . base_url('image/barang/hilang/') . $row['img_name'] . '"
                style="width: 300px; height: 300px"
              />
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <h4 style="font-weight: 700">'.$row['nama_barang'].'</h4>
            <span style="font-weight: 500">'.$nama.'</span>
            <hr />
            <h5 style="font-weight: 500">
              Detail <span class="head-color">Barang</span>
            </h5>
            <hr />
            <p>Penemu: '.$nama.'</p>
            <p>Kategori: '. $row['kategori'] .'</p>
            <p>Lokasi: '. $row['lokasi'] .'</p>
            <p>Kota: '. $row['kota'] .'</p>
            <p>Provinsi: '. $row['provinsi'] .'</p>
            <p>
              Deskripsi: '. $row['des_barang'] .'
            </p>
            <hr />
            <div style="padding-left: 10px; padding-right: 10px; display: flex">
              <img
                class="rounded-circle"
                src="'. base_url('assets/img/profile/').$profile_pict .'"
                style="width: 70px; height: 70px"
              />
              <div>
                <h5 style="margin-left: 10px">'.$nama.'</h5>
                <p style="margin-left: 10px">'. $row['kota'] .'</p>
              </div>
            </div>
            <hr />
          </div>';
          }
          ?>
          
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 style="font-weight: 600">Apakah ini barang milik Anda?</h5>
                <div
                  style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  "
                >
                  <button
                    class="btn btn-warning"
                    style="color: white; font-weight: 600"
                  >
                    Ya! punya saya
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
