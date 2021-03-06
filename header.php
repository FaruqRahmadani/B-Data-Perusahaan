<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header("Location:login.php");
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lumino - Dashboard</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?= $_SESSION['nama'] ?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
              <li><a href="functions/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li class="active"><a href="index.html"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
      <li><a href="perusahaandata.php"><span class="glyphicon glyphicon-th"></span> Data Perusahaan</a></li>
      <li><a href="userdata.php"><span class="glyphicon glyphicon-th"></span> Data User</a></li>
      <li><a href="widgets.html"><span class="glyphicon glyphicon-th"></span> Widgets</a></li>
      <li><a href="charts.html"><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
      <li><a href="tables.html"><span class="glyphicon glyphicon-list-alt"></span> Tables</a></li>
      <li><a href="forms.html"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
      <li><a href="panels.html"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
      <li class="parent ">
        <a href="#">
          <span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="#">
              <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
            </a>
          </li>
          <li>
            <a class="" href="#">
              <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
            </a>
          </li>
          <li>
            <a class="" href="#">
              <span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
            </a>
          </li>
        </ul>
      </li>
      <li role="presentation" class="divider"></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
    </ul>
    <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
  </div>
