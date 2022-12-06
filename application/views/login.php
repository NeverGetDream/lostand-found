<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
	<script src="components/bootstrap.bundle.js"></script>
	<title>Login | LOSTANDFOUND</title>
</head>

<body>
	<section class="vh-100" style="background-color: #f9a826">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<img src="assets/img/register.png" alt="login form" class="img-fluid" style="margin-top: 150px" />
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">
									<form action="<?php base_url() ?>login/login" method="POST">
										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="bi bi-search-heart-fill" style="font-size: 30px; color: #f9a826"></i>
											<span class="h1 fw-bold mb-0">LOST&FOUND</span>
										</div>

										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
											Masuk kedalam akun
										</h5>

										<div class="form-outline mb-4">
											<label class="form-label" for="email">Email address</label>
											<input type="email" id="email" class="form-control form-control-lg" placeholder="Alamat Email" />
										</div>

										<div class="form-outline mb-4">
											<label class="form-label" for="password">Password</label>
											<input type="password" id="password" class="form-control form-control-lg" placeholder="Password" />
										</div>

										<div class="pt-1 mb-4">
											<button class="btn btn-dark btn-lg btn-block" type="button">Masuk</button>
										</div>

										<a class="small text-muted" href="#!">Lupa Password?</a>
										<p class="mb-5 pb-lg-2" style="color: #393f81">
											Belum punya akun?
											<a href="register.php" style="color: #393f81">Daftar disini!</a>
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