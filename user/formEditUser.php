<?php
	include 'header.php';
	require_once '../functions/editUser.php';
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Data User</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data User</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="../functions/editUser.php?id=<?= $_GET['id']?>">
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Nama</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" value="<?= $data['nama'] ?>" name="nama" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Nomor Telepon</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" value="<?= $data['no_telepon'] ?>" name="no_telepon" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Alamat</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" value="<?= $data['alamat'] ?>" name="alamat" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Username</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" value="<?= $data['username'] ?>" name="username" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Password</label>
								</div>
								<div class="col-md-10">
									<input type="password" class="form-control" name="password" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="text-center">
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
          </form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
