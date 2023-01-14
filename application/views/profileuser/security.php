<div class="pt-5">
    <div class="container pt-5" style="padding-top: 100px;">
        <div class="row pt-4 container">
            <!-- Left -->
            <div class="col-md-6 pb-4">
                <div>
                    <div class="mx-auto">
                        <img src="<?= base_url('assets/img/') ?>passcode.png" alt="Security" class="mx-auto d-block img-sec">
                    </div>
                </div>
            </div>

            <!-- Right -->
            <div class="col-md-6  pt-4">
                <div class="d-flex align-items-center mb-3 pb-1">
                    <!-- <i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i> -->
                    <span class="h1 fw-bold mb-0 head-tx">Ubah Kata Sandi</span>
                </div>

                <div class="pt-2">
                    <form action="<?= base_url('profile/passChange') ?>" method="POST" enctype="multipart/form-data">
                        <!-- Pass Lama -->
                        <div class="form-outline mb-4">
                            <label class="form-label tx-main" for="old_pass">Password Lama</label>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="input-group">
                                <input type="password" for="old_pass" id="old_pass" class="form-control form-control-lg" placeholder="Password" name="old_pass">
                                <button class="btn show-button" type="button" onclick="visibilityA()">
                                    <i class="bi bi-eye-slash visibility-control" id="iconA"></i>
                                </button>
                            </div>
                            <small class="text-danger"><?= form_error('old_pass') ?></small>


                            <script>
                                function visibilityA(){
                                    var old_p = document.getElementById("old_pass");
                                    var old_eyes = document.getElementById("iconA");
                                    if(old_p.type === "password"){
                                        old_p.type = "text";
                                        old_eyes.setAttribute("class", "bi bi-eye visibility-control");
                                    }
                                    else{
                                        old_eyes.setAttribute("class", "bi bi-eye-slash visibility-control");
                                        old_p.type = "password";
                                    }
                                }
                            </script>
                        </div>

                        <!-- Pass Baru -->
                        <div class="form-outline mb-4">
                            <label class="form-label tx-main" for="new_pass">Password Baru</label>
                            <div class="input-group">
                                <input type="password" id="new_pass" class="form-control form-control-lg" placeholder="Password Baru" name="new_pass">
                                <button class="btn show-button" type="button" onclick="visibilityB()">
                                    <i class="bi bi-eye-slash visibility-control" id="iconB"></i>
                                </button>
                            </div>
                            <small class="text-danger"><?= form_error('new_pass_confir') ?></small>

                            <script>
                                function visibilityB(){
                                    var new_p = document.getElementById("new_pass");
                                    var new_eyes = document.getElementById("iconB");
                                    if(new_p.type === "password"){
                                        new_p.type = "text";
                                        new_eyes.setAttribute("class", "bi bi-eye visibility-control");
                                    }
                                    else{
                                        new_eyes.setAttribute("class", "bi bi-eye-slash visibility-control");
                                        new_p.type = "password";
                                    }
                                }
                            </script>
                        </div>

                        <!--Konfirmasi Pass Baru -->
                        <div class="form-outline mb-4">
                            <label class="form-label tx-main" for="new_pass_confir">Konfirmasi Password Baru</label>
                            <div class="input-group">
                                <input type="password" id="new_pass_confir" class="form-control form-control-lg" placeholder="Password Baru" name="new_pass_confir" oninput="passCheck()">
                                <button class="btn show-button" type="button" onclick="visibilityC()">
                                    <i class="bi bi-eye-slash visibility-control" id="iconC"></i>
                                </button>
                            </div>
                            <small class="text-danger"><?= form_error('new_pass_confir') ?></small>

                            <script>
                                function visibilityC(){
                                    var new_p_confir = document.getElementById("new_pass_confir");
                                    var new_eyes_confir = document.getElementById("iconC");
                                    if(new_p_confir.type === "password"){
                                        new_p_confir.type = "text";
                                        new_eyes_confir.setAttribute("class", "bi bi-eye visibility-control");
                                    }
                                    else{
                                        new_eyes_confir.setAttribute("class", "bi bi-eye-slash visibility-control");
                                        new_p_confir.type = "password";
                                    }
                                }

                                function passCheck(){
                                    var pass = document.getElementById("new_pass").value;
                                    var pass_confirmation = document.getElementById("new_pass_confir").value;
                                    var but = document.getElementById("submit_but");
                                    if(pass == pass_confirmation){
                                        but.setAttribute("class", "btn btn-dark btn-lg btn-block main-but");
                                    }
                                    else{
                                        but.setAttribute("class", "btn btn-dark btn-lg btn-block main-but disabled");
                                    }
                                }
                            </script>
                        </div>

                        <!-- Button -->
                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block main-but" type="submit" id="submit_but">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>