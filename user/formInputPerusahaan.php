<?php
	include 'header.php';
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Tambah Data Perusahaan</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tambah Data Perusahaan</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="../functions/submitPerusahaanTambah.php">
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Nama</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" name="nama" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Alamat</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" name="alamat" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Status</label>
								</div>
								<div class="col-md-10">
									<select class="form-control" name="status" required>
										<option value="" selected hidden>Pilih</option>
										<option value="Swasta">Swasta</option>
										<option value="BUMN">BUMN</option>
									</select>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Nomor Telepon</label>
								</div>
								<div class="col-md-10">
									<input class="form-control" name="no_telepon" required>
								</div>
							</div>
            </div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2 text-right">
									<label class="margin-4">Keterangan</label>
								</div>
								<div class="col-md-10">
									<textarea name="keterangan" rows="3" class="form-control" required></textarea>
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
