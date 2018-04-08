<?php
  require_once 'connection.php';
  $id = $_GET['id'];
  $query = mysqli_query($connect, "DELETE FROM perusahaan WHERE id=$id");
  header('Location: ../perusahaandata.php');
