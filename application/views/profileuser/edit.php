<div class="pt-5">
    <div class="container pt-5" style="padding-top: 100px;">
        <form action="<?= base_url('profile/doEdit') ?>" method="POST" enctype="multipart/form-data">
            <div class="row pt-4">
                <!-- Left -->
                <div class="col-md-4 pb-4">
                    <div class="profile-pic-up">
                        <div class="mx-auto d-block">
                            <img src="<?= base_url('assets/img/profile/').$this->session->userdata['auth_data']['image'] ?>" id="output" width="70%" class="mx-auto d-block img-preview" />
                        </div>

                        <div class="pt-4">
                            <button type="button" class="mx-auto d-block change-img-but">
                                <label class="img-hint" for="file">
                                    <h2 class="img-hint">Ubah Foto</h2>
                                </label>
                            </button>

                            <input name="new_img" id="file" type="file" onchange="loadFile(event)" class="in-file" />

                            <script>
                                var loadFile = function(event) {
                                    var image = document.getElementById("output");
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="col-md-8">
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <!-- <i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i> -->
                        <span class="h1 fw-bold mb-0 head-tx">Edit Profile</span>
                    </div>

                    <?php
                    // echo $sourcecontrol;
                    // echo '<pre>'; print_r($userdata); echo '</pre>'; die();
                    if($sourcecontrol == 'db'){
                        $val_fname = $data_profil['first_name'];
                        $val_bname = $data_profil['last_name'];
                        $val_email = $data_profil['email'];
                        $val_hp = $data_profil['no_hp'];
                        $val_prov = $data_profil['provinsi'];
                        $val_kota = $data_profil['kota'];
                        $val_alamat = $data_profil['alamat'];
                    }
                    elseif($sourcecontrol == 'form_validation'){
                        $val_fname = set_value('fname');
                        $val_bname = set_value('bname');
                        $val_email = set_value('email');
                        $val_hp = set_value('no_hp');
                        $val_prov = set_value('provinsi');
                        $val_kota = set_value('kota');
                        $val_alamat = set_value('alamat');
                    }
                    ?>

                    <div class="row">
                        <div class="form-outline mb-4 col-sm-6">
                            <label class="form-label tx-main" for="fname">Nama Depan</label>
                            <input type="text" id="fname" class="form-control form-control-lg" placeholder="Nama Depan" name="fname" value=<?= $val_fname ?>>
                            <small class="text-danger"><?= form_error('fname') ?></small>
                        </div>
                        <div class="form-outline mb-4 col-sm-6">
                            <label class="form-label tx-main" for="bname">Nama Belakang</label>
                            <input type="text" id="bname" class="form-control form-control-lg" placeholder="Nama Belakang" name="bname" value=<?= $val_bname ?>>
                            <small class="text-danger"><?= form_error('bname') ?></small>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label tx-main" for="email">Email address</label>
                        <input type="email" id="email" disabled class="form-control form-control-lg" placeholder="Alamat Email" value=<?= $val_email ?>>

                        <!-- Value E-Mail yang akan di input -->
                        <input type="hidden" id="email" class="form-control form-control-lg" placeholder="Alamat Email" name="email" value=<?= $val_email ?>>
                        
                        <small class="text-danger"><?= form_error('email') ?></small>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label tx-main" for="handphone">No. Handphone</label>
                        <input type="text" id="no_hp" class="form-control form-control-lg" placeholder="No. Handphone" name="no_hp" value=<?= $val_hp ?>>
                        <small class="text-danger"><?= form_error('no_hp') ?></small>
                    </div>

                    <div class="row">
                        <div class="form-outline mb-4 col-sm-6">
                            <label class="form-label tx-main" for="provinsi">Provinsi</label>
                            <select name="provinsi" class="form-select form-select-lg" placeholder="Pro">
                                <?php
                                foreach ($prov as $p) {
                                    $provinsi = $p['provinsi'];
                                    if($provinsi == $val_prov){
                                        echo '<option value="'. $val_prov .'" selected>'. $val_prov .'</option>';
                                        continue;
                                    }
                                    echo '
                                        <option value="'. $provinsi .'">'. $provinsi .'</option>
                                    ';
                                }
                                ?>
                            </select>
                            <small class="text-danger"><?= form_error('provinsi') ?></small>
                        </div>
                        <div class="form-outline mb-4 col-sm-6">
                            <label class="form-label tx-main" for="kota">Kota</label>
                            <input type="text" id="kota" class="form-control form-control-lg" placeholder="Asal Kota" name="kota" value=<?= $val_kota ?>>
                            <small class="text-danger"><?= form_error('kota') ?></small>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label tx-main" for="kota">Alamat</label>
                        <input type="text" id="alamat" class="form-control form-control-lg" placeholder="Alamat" name="alamat" value=<?= $val_alamat ?>>
                        <small class="text-danger"><?= form_error('alamat') ?></small>
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block main-but" type="submit">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>