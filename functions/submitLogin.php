<?php

		include("../config/connection.php");
		session_start();
		$username = $_POST['username'];
		$password = md5($_POST['password']);

    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $rowcount = mysqli_num_rows($query);

    if ($rowcount != 0) {
  	$_SESSION['username'] = $username;
  	$_SESSION['password'] = $password;
  	header("Location:../user/index.php");
	}
	else
	{
	  	header("Location:../public/login.php");
	}

?>
