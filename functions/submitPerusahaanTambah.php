<?php
	if (isset($_POST['submit'])) {
		include("../config/connection.php");
		$nama 			= $_POST['nama'];
		$alamat 		= $_POST['alamat'];
		$status 		= $_POST['status'];
		$no_telepon = $_POST['no_telepon'];
		$keterangan = $_POST['keterangan'];

    $query = mysqli_query($connect, "INSERT INTO perusahaan (nama, alamat, status, no_telepon, keterangan) VALUES ('$nama','$alamat','$status','$no_telepon','$keterangan')");

    header("Location:../user/dataPerusahaan.php");
	}
?>
