<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Admin | Recruitment Management System</title>


	<?php include('./header.php'); ?>
	<?php include('./db_connect.php'); ?>
	<?php
	session_start();
	if (isset($_SESSION['login_id']))
		header("location:index.php?page=home");

	?>

</head>
<style>
	body {
		width: 100%;
		height: calc(100%);
	}

	.container {
		min-height: 80vh;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	img {
		height: 100%;
		width: 100%;
		object-fit: cover;
	}

	#hero {
		background-image: url(../img/hero.png);
		background-size: cover;
		min-height: 100vh;
		position: fixed;
		background-position: center;
		position: relative;
		z-index: 1;
	}

	#hero::after {
		content: '';
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		background-color: rgba(22, 22, 22);
		opacity: 0.9;
		z-index: -1;
	}

	#login-right .card {
		margin: auto;
		z-index: 1
	}

	
</style>

<body>

	<section id="hero">
		<div class="hero container">
			<div class="card col-md-5">
				<div class="card-body">
					
					<div class="panel-heading">
						ADMIN LOGIN FORM
					</div>
					<hr>
					<form id="login-form">
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							<input type="text" id="username" name="username" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<input type="password" id="password" name="password" class="form-control" autocomplete="off" required>
						</div>
						<center><button class="btn-sm btn-block btn-wave col-md-3 btn-primary">Login</button></center>
					</form>
				</div>
			</div>
		</div>
	</section>

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