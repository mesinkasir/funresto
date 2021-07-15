<?php
  require_once('session.php');
  confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="free and open source code point of sale for restaurant cafe application">
  <meta name="author" content="https://axcora.com">
  <title>Fun resto App - Point of sale</title>
  <link rel="icon" type="image/x-icon" href='https://1.bp.blogspot.com/-X_pYOADXOpA/YO72Ad-giFI/AAAAAAAAP1A/KQIjTTfmuA8mP6xKhX-7h5LETLKegz9xgCLcBGAsYHQ/s512/baker.png'> 
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cart.css" />
</head>
<body id="page-top">
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <a class="align-items-center justify-content-center" href="index.php">
        <img src="../img/baker.png" width="50">
        <div class=""><span class="text-danger">Fun</span> <span class="text-success">Resto</span> Apps</div>
      </a>
        <ul class="navbar-nav ml-auto">
          <li><a class="nav-link" href="https://www.hockeycomputindo.com/2021/07/restaurant-pos-free-download-source-code.html">Documentation</a></li>
            <li><a class="nav-link" href="https://www.hockeycomputindo.com/p/webapp.html">App</a></li>
            <li>
            <a class="dropdown-item bg-danger text-white" href="#" data-toggle="modal" data-target="#logoutModal">
                Log out</a>
            </li>
          </ul>
        </nav>
      <div class="container-fluid">