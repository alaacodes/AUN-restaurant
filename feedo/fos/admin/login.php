<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Admin | AUN Restaurant</title>


	<?php include('./header.php'); ?>
	<?php include('./db_connect.php'); ?>
	<?php
	session_start();
	if (isset($_SESSION['login_id']))
		header("location:index.php?page=home");

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if (!is_numeric($key))
			$_SESSION['setting_' . $key] = $value;
	}
	?>

</head>
<style>
	body {
		width: 100%;
		height: calc(100%);
		/*background: #007bff;*/
	}

	main#main {
		width: 100%;
		height: calc(100%);
		background: white;
	}

	#login-right {
		position: absolute;
		right: 0;
		width: 40%;
		height: calc(100%);
		background: white;
		display: flex;
		align-items: center;
	}

	#login-left {
		position: absolute;
		left: 0;
		width: 60%;
		height: calc(100%);
		background: #00000061;
		display: flex;
		align-items: center;
	}

	#login-right .card {
		margin: auto
	}

	.logo {
		margin: auto;
		font-size: 8rem;
		background: white;
		border-radius: 50% 50%;
		height: 29vh;
		width: 13vw;
		display: flex;
		align-items: center;
	}

	.logo img {
		height: 80%;
		width: 80%;
		margin: auto
	}
</style>

<body>


	<main id="main" class=" bg-dark">
		<div id="login-left">
			<div class="logo">
				<img src="../assets/img/sample_logo.png" alt="">
			</div>
		</div>
		<div id="login-right">
			<div class="card col-md-8">
				<div class="card-body">
					<form id="login-form">
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							<input type="text" id="username" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
					</form>
				</div>
			</div>
		</div>
		<!-- <form id="login-form">
			<div class=" row mt-5">
				<div class="spContainer mx-auto">
					<div class="card px-4 py-5 border-0 shadow">
						<div class="d-inline text-left mb-3">
							<img src="img/logo.jpg" alt="" width=100px height=80px style="margin-left: 30%">
						</div>
						<div class="d-inline text-left mb-3">
							<h3 class="font-weight-bold">Employee Login</h3>
						</div>
						<div class="d-inline text-center mb-0">
							<div class="form-group mx-auto">
								<input class="form-control inpSp" type="text" placeholder="email" name="email">
							</div>
						</div>
						<div class="d-inline text-center mb-3">
							<div class="form-group mx-auto">
								<input class="form-control inpSp" type="password" placeholder="Password" name="password">
							</div>
						</div>
						<div class="d-inline text-left mb-3">
							<div class="form-group mx-auto">
								<button class="btn btn-primary">Login</button>
								<!-- <a class="small text-black-50 pl-2 ml-2 border-left" href="">Forgot Password ?</a> -->
		</div>
		</div>
		</div>
		</div>
		<div class="d-inline text-left mt-3">

		</div>
		</div>
		</div>
		</div>
		</form> -->


	</main>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e) {
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
		if ($(this).find('.alert-danger').length > 0)
			$(this).find('.alert-danger').remove();
		$.ajax({
			url: 'ajax.php?action=login',
			method: 'POST',
			data: $(this).serialize(),
			error: err => {
				console.log(err)
				$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success: function(resp) {
				if (resp == 1) {
					location.href = 'index.php?page=home';
				} else if (resp == 2) {
					location.href = 'voting.php';
				} else {
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>

</html>