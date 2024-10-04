<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul; ?></title>

  <!-- Load Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Load Google Fonts Montserrat and Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/data_aset.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/peminjaman.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/edit_profile.css'); ?>">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="Asset ICT" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link me-3 <?= ($this->uri->segment(1) == '') ? 'active' : '' ?>" href="<?= site_url(); ?>dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 <?= ($this->uri->segment(1) == 'asset') ? 'active' : '' ?>" href="<?= site_url(); ?>asset">Data Aset</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 <?= ($this->uri->segment(1) == 'peminjaman') ? 'active' : '' ?>" href="<?= site_url(); ?>pinjam">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3 <?= ($this->uri->segment(1) == 'kritik_saran') ? 'active' : '' ?>" href="<?= site_url(); ?>laporan">Laporan</a>
            </li>
        </ul>
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <div class="dropdown">
            <button class="btn btn-primary rounded-pill dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown">
              <?= "Halo, " . $this->session->userdata('username'); ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= base_url('profil/edit'); ?>">Edit Profile</a></li>
            </ul>
          </div>
          <button class="btn btn-danger rounded-pill" onclick="confirmLogout()">Logout</button>
        </div>
      </div>
      
    </div>
  </nav>