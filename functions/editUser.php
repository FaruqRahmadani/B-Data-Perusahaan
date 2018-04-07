<?php
  require_once 'connection.php';
  $id = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM user WHERE id=$id");
  $data = mysqli_fetch_array($query);
  if (isset($_POST['submit'])) {
    $nama 			= $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $alamat 	  = $_POST['alamat'];
    $username 	= $_POST['username'];
    $password 	= md5($_POST['password']);

    $query = mysqli_query($connect, "UPDATE user SET nama='$nama', no_telepon='$no_telepon', alamat='$alamat', username='$username', password='$password' WHERE id=$id");

    header('Location: ../userdata.php');
  }
