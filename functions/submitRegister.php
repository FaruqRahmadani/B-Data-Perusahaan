<?php
	if (isset($_POST['submit'])) {
		include("../config/connection.php");
		$nama 			= $_POST['nama'];
		$no_telepon = $_POST['no_telepon'];
    $alamat 	  = $_POST['alamat'];
		$username 	= $_POST['username'];
		$password 	= md5($_POST['password']);

    // Validasi username
    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
    if (!mysqli_num_rows($query)) {
      $query = mysqli_query($connect, "INSERT INTO user (nama, no_telepon, alamat, username, password) VALUES ('$nama','$no_telepon','$alamat','$username','$password')");

      header("Location:../public/login.php");
    }

	}
?>
