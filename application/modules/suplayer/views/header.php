<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?php echo $nama_menu; ?></title>
  <link href="<?php echo base_url(); ?>assets/dist/css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

</head>
<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url() ?>"><?php echo $nama_menu ?></a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" /> -->
        <div class="input-group-append">
          <!-- <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button> -->
        </div>
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('panel/logout') ?>">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?php echo base_url(); ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Panel Aplikasi</div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fa fa-wrench" ></i></div>
              Config Aplikasi
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?php echo base_url() ?>t_user"> <span class="fa fa-user"></span> User Management</a>
              </nav>
            </div>


            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsbarang" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fa fa-cog fa-spin"></i></div>
              Master Aplikasi
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutsbarang" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?php echo base_url() ?>jenis"> <i class="fa fa-file"></i> &nbsp; Jenis</a>
                <a class="nav-link" href="<?php echo base_url() ?>kategory"> <span class="fa fa-tasks"></span>  &nbsp; Kategory</a>
                <a class="nav-link" href="<?php echo base_url() ?>suplayer"> <span class="fa fa-truck"></span>   &nbsp; Suplayer</a>
                <a class="nav-link" href="<?php echo base_url() ?>ruang"> <span class="fa fa-home"></span>  &nbsp; Ruang</a>
                <a class="nav-link" href="<?php echo base_url() ?>pegawai"> <span class="fa fa-user"></span>  &nbsp; Pegawai</a>
                <a class="nav-link" href="<?php echo base_url() ?>jenis_maintenage"> <span class="fa fa-road"></span> &nbsp; Jenis Maintenage</a>

              </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsbarangj" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fa fa-server"></i></div>
              Transaksi Aplikasi
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutsbarangj" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">

                <a class="nav-link" href="<?php echo base_url() ?>barang/tambah"> <i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Tambah Barang</a>
                <a class="nav-link" href="<?php echo base_url() ?>barang"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Stock Barang</a>
                <a class="nav-link" href="<?php echo base_url() ?>barang/sparepart"> <i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Stock SP/BHP/DLL</a>
                <a class="nav-link" href="<?php echo base_url() ?>distribusi/tambah"> <i class="fa fa-tags" aria-hidden="true"></i>&nbsp;Distribusi Barang</a>
                <a class="nav-link" href="<?php echo base_url() ?>barang/user_tambah"> <i class="fa fa-users" aria-hidden="true"></i>&nbsp;Distribusi Pegawai</a>
                <a class="nav-link" href="<?php echo base_url() ?>barang/invertory_tambah"> <i class="fa fa-tag" aria-hidden="true"></i>&nbsp;Dist SP/DLL->INV</a>
                <a class="nav-link" href="<?php echo base_url() ?>maintenage/tambah"> <i class="fa fa-rocket" aria-hidden="true"></i>&nbsp;Input Maintenage</a>
                <a class="nav-link" href="<?php echo base_url() ?>maintenage"> <i class="fa fa-table" aria-hidden="true"></i>&nbsp;Table Maintenage</a>
              </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsdistribusi" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fa fa-folder"></i></div>
              Report
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutsdistribusi" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="<?php echo base_url() ?>healty"> <i class="fa fa-database" aria-hidden="true"></i>&nbsp;Healty Barang</a>
  <a class="nav-link" href="<?php echo base_url() ?>maintenage/foto"> <i class="fa fa-camera" aria-hidden="true"></i>&nbsp;Foto Maintenage</a>
    <a class="nav-link" href="<?php echo base_url() ?>laporan"> <i class="fa fa-file" aria-hidden="true"></i>&nbsp;Laporan</a>
              </nav>
            </div>













          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          <?php echo $nama_pengguna ?>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
