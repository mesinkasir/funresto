<?php
  require('session.php');
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
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/x-icon" href='https://1.bp.blogspot.com/-X_pYOADXOpA/YO72Ad-giFI/AAAAAAAAP1A/KQIjTTfmuA8mP6xKhX-7h5LETLKegz9xgCLcBGAsYHQ/s512/baker.png'> 
  <title>Fun Resto Apps</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  
    <div id="wrapper">
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <img src="../img/baker.png" width="50">
        </div>
        <div class="sidebar-brand-text mx-3"><span class="text-danger">Fun</span> <span class="text-warning">Resto</span> Apps</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="employee.php">
        <img src="../img/user.png" width="30">
          <span>Staff</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="user.php">
        <img src="../img/acc.png" width="30">
          <span>Accounts</span></a>
      </li>
<hr class="sidebar-divider">
        <li class="nav-item active">
        <a class="nav-link" href="customer.php">
        <img src="../img/table.png" width="30">
          <span>Table</span></a>
      </li>
      <hr class="sidebar-divider">
<li class="nav-item active">
        <a class="nav-link" href="product.php">
        <img src="../img/menus.png" width="30">
          <span>Menu's</span></a>
      </li>
      <hr class="sidebar-divider">
<li class="nav-item active">
  <a class="nav-link" href="pos.php">
  <img src="../img/pos.png" width="30">

    <span>POS</span></a>
</li>
      <hr class="sidebar-divider">
       <li class="nav-item active">
        <a class="nav-link" href="transaction.php">
        <img src="../img/report.png" width="30">
          <span>Report</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <?php include_once 'topbar.php'; ?>
