<?php
	if (isset($_POST['submit'])) {
		include("connection.php");
		$username = $_POST['username'];
		$password = md5($_POST['password']);

    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query)) {
			$Data = mysqli_fetch_array($query);
			session_start();
			$_SESSION['id']   = $Data['id'];
			$_SESSION['nama'] = $Data['nama'];
      header("Location:../index.php");
    }

		header("Location:../login.php");
	}
?>
