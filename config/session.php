<?php

session_start();
if (!isset($_SESSION['username']) and (!isset($_SESSION['password']))) {
    header("Location:../public/login.php");
  }

 ?>
