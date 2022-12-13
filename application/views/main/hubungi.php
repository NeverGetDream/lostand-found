<head>
  <link href="<?= base_url('assets/'); ?>css/hubungi.css" rel="stylesheet" type="text/css" />
</head>
<div class="section section-mt">
  <div class="container mt-4">
    <h1>Kontak Kami</h1>
    <p>
      Jika Anda memiliki pertanyaan atau tidak dapat menemukan apa yang Anda
      cari,<br />jangan ragu untuk menghubungi kami di:
    </p>
    <div class="row">
      <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11239.650602242256!2d119.48906827476623!3d-5.1332207743108675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcca2887e13f%3A0xf5c059de86dd07!2sPNUP%20Politeknik%20Negeri%20Ujung%20Pandang!5e0!3m2!1sid!2sid!4v1667425887710!5m2!1sid!2sid" width="95%" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6">
        <h2>Kantor Sementara</h2>
        <p>
          PT. Kerja Kelompok Sukses <br/>
          Kampus 1 PNUP <br/>
          JL. Jalan Utama Unhas
        </p>
        <div class="row">
          <div class="col-5">
            <p><i class="bi bi-whatsapp"></i> (085) xxxxxx</p>
          </div>
          <div class="col-7">
            <p><i class="bi bi-envelope"></i> tanya@lostfound.id</p>
          </div>
        </div>
        <div>
          <a href="<?= base_url('main/help') ?>"><button class="button-more" href="<?= base_url('main/help') ?>" >Perlu bantuan</button></a>
          <br />
          <button class="button-more" data-bs-toggle="modal" data-bs-target="#myModal">
            Hubungi Kami
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-style" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header" style="border: none">
        <h4 class="modal-title">Hubungi Kami</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-outline mb-4">
          <label class="form-label" for="nama">Nama Lengkap</label>
          <input type="text" id="nama" class="form-control form-control-md" placeholder="Nama Lengkap" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="email">Email address</label>
          <input type="email" id="email" class="form-control form-control-md" placeholder="Alamat Email" />
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="text">Pesan Anda</label>
          <textarea rows="5" placeholder="Keluh Kesah Anda" class="form-control form-control-md" id="comment" name="text"></textarea>
        </div>
        <div class="modal-footer" style="border: none" x>
          <button class="button-more">Perlu bantuan</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

</html>