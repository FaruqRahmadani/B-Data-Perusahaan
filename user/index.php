<?php
include('header.php');
require_once '../config/connection.php';
	$query_perusahaan = mysqli_query($connect, "SELECT * FROM perusahaan");
	$jumlahperusahaan = mysqli_num_rows($query_perusahaan);

	$query_user = mysqli_query($connect, "SELECT * FROM user");
	$jumlahuser = mysqli_num_rows($query_user);
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6 col-lg-6">
			<div class="panel panel-blue panel-widget ">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<em class="glyphicon glyphicon-home glyphicon-l"></em>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large"><?= $jumlahperusahaan ?></div>
						<div class="text-muted">Jumlah Perusahaan</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6">
			<div class="panel panel-orange panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<em class="glyphicon glyphicon-user glyphicon-l"></em>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large"><?= $jumlahuser ?></div>
						<div class="text-muted">Jumlah User</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
