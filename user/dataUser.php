<?php
	include 'header.php';
	require_once '../config/connection.php';
	$query = mysqli_query($connect, "SELECT * FROM user");
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
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Nomor Telepon</th>
								<th>Alamat</th>
								<th>Username</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($query as $Index=>$Data): ?>
								<tr>
									<td><?= $Index+1 ?></td>
									<td><?= $Data['nama'] ?></td>
									<td><?= $Data['no_telepon'] ?></td>
									<td><?= $Data['alamat'] ?></td>
									<td><?= $Data['username'] ?></td>
									<td>
										<a href="formEditUser.php?id=<?= $Data['id'] ?>" class="none-decoration">
											<button class="btn-xs btn-info">Edit</button>
										</a>
										<a href="../functions/hapusUser.php?id=<?= $Data['id'] ?>" class="none-decoration">
											<button class="btn-xs btn-danger">Hapus</button>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
