<?php
  require_once '../config/connection.php';
  $id = $_GET['id'];
  $query = mysqli_query($connect, "DELETE FROM user WHERE id=$id");
  header('Location: ../user/dataUser.php');
