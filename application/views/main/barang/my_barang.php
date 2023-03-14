<div class="container section">
	<div class="mt-5">
	    <link href="<?= base_url('assets/barang/css/') ?>cards.css" rel="stylesheet">
		<div class="row">
			<?php
			foreach ($barang as $row) {
				$nama = $row['first_name'] . ' ' . $row['last_name'];
				$profile_pict = $row['image'];
				echo '
          			<div class="col-sm-3" style="padding-right: 20px">
            			<div style="display: block">
              				<img class="rounded-3" src="'. base_url('image/barang/hilang/').$row['img_name'] .'"style="width: 300px; height: 300px"/>
            			</div>
          			</div>
					<div class="col-sm-6 mt-3">
						<h4 style="font-weight: 700; font-size: 35px;">' . $row['nama_barang'] . '</h4>
						<hr/>
						<h5 style="font-weight: 500">
							Detail <span class="head-color">Barang</span>
						</h5>
						<hr/>

						<div>
							<pre class="info-text-pg">Penemu		: '.$nama.'</pre>
							<pre class="info-text-pg">Kategori		: '.$row['kategori'].'</pre>
							<pre class="info-text-pg">Lokasi		: '.$row['lokasi'].'</pre>
							<pre class="info-text-pg">Kota			: '.$row['kota'].'</pre>
							<pre class="info-text-pg">Provinsi		: '.$row['provinsi'].'</pre>
						</div>

            			<hr />
            			<div style="padding-left: 10px; padding-right: 10px; display: flex">
              				<img class="rounded-circle" src="'. base_url('assets/img/profile/').$profile_pict.'" style="width: 70px; height: 70px"/>
              			<div>
						<div style="margin-left: 30px; padding-top: 6px;">
                			<h5 style="font-weight: 600; font-size: 24px;">'.$nama.'</h5>
                			<p>' . $row['kota'] . '</p>
						</div>
              		</div>
            	</div>
            	<hr />
          		</div>';
			} ?>

			<div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 style="font-weight: 600">Apakah ini barang milik Anda?</h5>
						<div style="display: flex; justify-content: center; align-items: center;">
							<form action="<?= base_url('barang/verifRequest') ?>" method="POST">
								<input type="hidden" value="<?=$row['id_barang']?>" name="id_barang">
								<button class="btn btn-warning" style="color: white; font-weight: 600">
									Ya! punya saya
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>