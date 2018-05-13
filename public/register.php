<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Register User</div>
				<div class="panel-body">
					<form role="form" autocomplete="off" method="post" action="../functions/submitRegister.php">
							<div class="form-group">
								<input class="form-control" placeholder="Nama" name="nama" type="text" value="" autofocus required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nomor Telelpon" name="no_telepon" type="text" value="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Alamat" name="alamat" type="text" value="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" value="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
