<?php
  require_once 'connection.php';
  $id = $_GET['id'];
  if (isset($_POST['submit'])) {
    $nama 			= $_POST['nama'];
		$alamat 		= $_POST['alamat'];
		$status 		= $_POST['status'];
		$no_telepon = $_POST['no_telepon'];
		$keterangan = $_POST['keterangan'];

    $query = mysqli_query($connect, "UPDATE perusahaan SET nama='$nama',alamat='$alamat',status='$status',no_telepon='$no_telepon',keterangan='$keterangan' WHERE id=$id");


    header('Location: ../perusahaandata.php');
  }
  $query = mysqli_query($connect, "SELECT * FROM perusahaan WHERE id=$id");
  $data = mysqli_fetch_array($query);
