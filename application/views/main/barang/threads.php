<body>
    <!-- Bagian kiri -->
    <div class="container section">
        <div class="mt-5">
            <div class="row gx-5">
                <div class="col-sm-3 none">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4>Status anda</h4>
                            <hr/>
                            <h5>Barang Anda yang hilang</h5>
                            <p>4</p>
                            <hr/>
                            <h5>Barang yang Anda temukan</h5>
                            <p>4</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <!--Tempat posting-->
                    <form action=<?= base_url('main/thread_post') ?> method="POST" enctype="multipart/form-data">
                        <div class="card gedf-card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <p class="nav-link active">Informasikan barang Anda yang hilang!</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active">
                                        <div class="form-group">
                                            <label class="sr-only" for="message"></label>
                                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Barang apa, dan hilang dimana?"><?= set_value('message') ?></textarea>
                                            <small class="text-danger"><?= form_error('message') ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-toolbar justify-content-between">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-warning mt-4" style=" color: #fff; background-color: #f9a826; border: 2px solid #f9a826; border-radius: 15px; text-decoration: none; padding: 10px 10px; font-weight: 500;">
                                            Posting
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--Posting-->
                    <?php
                    foreach($threads as $row){
                    ?>
                    <div class="card gedf-card mt-5">
                        <div class="card-header">
                            <div class="d-flex">
                                <img src="<?= base_url('assets/img/profile/').$row['image'] ?>" class="rounded-circle" alt="profile" style="width: 40px; height: 40px" />
                                <p style="margin-left: 10px; font-weight: 500">
                                    <?= $row['first_name'] ?>
                                </p>
                            </div>
                        </div>
                        <!--isi-->
                        <div class="card-body">
                            <p><?= $row['text'] ?></p>
                            <hr />
                            <!--Komentar-->
                            <form action=<?= base_url('main/comment') ?> method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="thread_id" value="<?= $row['thread_id'] ?>">
                                <textarea class="form-control" name="comment" id="comment" rows="1" placeholder="Komentar" oninput="cek(<?= $row['thread_id'] ?>)"></textarea>
                                <div align="right">
                                    <button type="submit" id="<?= $row['thread_id'] ?>" class="btn btn-warning mt-2 disabled" style=" color: #fff; background-color: #f9a826; border: 2px solid #f9a826; border-radius: 15px; text-decoration: none; padding: 10px 10px; font-weight: 500;">
                                        Komentar
                                    </button>
                                </div>
                            </form>

                            <!--komen-->
                            <!-- Start Loop -->
                                <?php
                                foreach($comment as $c){
                                    if($c['id_thread'] == $row['thread_id']){    
                                ?>
                                <div class="panel panel-primary pb-2" style="margin-left: 20px">
                                    <div class="panel-heading">
                                        <img src="<?= base_url('assets/img/profile/').$c['image'] ?>" class="rounded-circle" alt="profile" style="width: 40px; height: 40px" />
                                        <b><?= $c['first_name'] ?></b>
                                    </div>
                                    <div class="panel-body"><?= $c['comment'] ?></div>
                                </div>
                                <?php }} ?>
                            <!-- End Loop -->
                        </div>
                    </div>
                    <?php } ?>
                    <div class="pt-4">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                    <script>
                        function cek(id){
                            var button = document.getElementById(id);
                            button.setAttribute('class', 'btn btn-warning mt-2');
                        }
                    </script>
                </div>

                <!--Bagian kanan-->
                <div class="col-sm-3 none">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <img src="assets/img/lostlogo.png" class="rounded-circle" alt="profile" style="width: 40px; height: 40px" />
                                <h5 style="margin-left: 10px">Azwar Meizia Kusumah</h5>
                            </div>
                            <hr />
                            <h5>Email</h5>
                            <p>email@gmail.com</p>
                            <hr />
                            <h5 style="margin-bottom: 20px">Cari barangmu</h5>
                            <a href="login.html" style="color: #fff; background-color: #f9a826; border: 2px solid #f9a826; border-radius: 15px; text-decoration: none; padding: 10px 10px; font-weight: 500;">
                                Temukan Barang anda
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>