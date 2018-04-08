<?php
	include('header.php');
	require_once 'functions/connection.php';
	$query = mysqli_query($connect, "SELECT * FROM perusahaan");
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Data Perusahaan</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Perusahaan</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="perusahaantambah.php" name="button" class="btn btn-primary">Tambah Data</a>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Status</th>
								<th>No Telepon</th>
								<th>Keterangan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($query as $Index=>$Data): ?>
								<tr>
									<td><?= $Index+1 ?></td>
									<td><?= $Data['nama'] ?></td>
									<td><?= $Data['alamat'] ?></td>
									<td><?= $Data['status'] ?></td>
									<td><?= $Data['no_telepon'] ?></td>
									<td><?= $Data['keterangan'] ?></td>
									<td>
										<a href="#">
											<button class="btn-xs btn-info">Edit</button>
										</a>
										<a href="functions/hapusPerusahaan.php?id=<?= $Data['id'] ?>">
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
