<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login &dash; SI Akuntansi</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/plugins/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/dist/css/adminlte.min.css?v=3.2.0') ?>">
	<link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
			</div>
			<div class="card-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<?php if ($this->session->flashdata('error')) { ?>
					<p class="text-danger login-box-msg">
						<?= $this->session->flashdata('error'); ?>
					</p>
				<?php } ?>

				<form action="<?= base_url('auth/login') ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" name="user" id="user" class="form-control <?= form_error('user') ? 'is-invalid' : '' ?>" value="<?= set_value('user') ?>" placeholder="Username atau Alamat Email" autofocus autocomplete="identitas" aria-describedby="user-error">
						<span id="user-error" class="error invalid-feedback"><?= form_error('user') ?></span>
					</div>

					<div class="input-group mb-3">
						<input type="password" name="password" id="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password" autocomplete="kata-sandi" aria-describedby="password-error">
						<span id="password-error" class="error invalid-feedback"><?= form_error('password') ?></span>
					</div>

					<div class="input-group mb-3">
						<button type="submit" class="btn btn-block btn-primary">
							<i class="fas fa-sign-in-alt mr-2"></i> LOGIN
						</button>
					</div>
				</form>

				<p class="mb-1">
					<a href="<?= base_url('auth/forgot-password') ?>">Lupa password</a>
				</p>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/vendor/plugins/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>
</body>

</html>
