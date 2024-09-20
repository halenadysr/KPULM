<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Asset ICT</title>

  <!-- Load Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Load Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Load custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/kritik_saran.css'); ?>">
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/css/images/logo.svg'); ?>" alt="Asset ICT" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('data_aset'); ?>">Data Aset</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('peminjaman'); ?>">Peminjaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('kritik_saran'); ?>">Kritik dan Saran</a>
          </li>
        </ul>
      </div>
      <div>
        <button class="btn btn-primary">Hallo, User</button>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-4">
    <h2 class="text-center mb-4">Kritik dan Saran</h2>
    <div class="full-width-text">
      <p class="text-center">Berikan kritik maupun saran untuk pengembangan manajemen aset selanjutnya</p>
    </div>

    <div class="container my-5">
      <div class="row justify-content-center mb-4">
        <div class="col-md-8 text-center">
          <img src="https://via.placeholder.com/600x300" alt="Ilustrasi" class="img-fluid mb-3 shadow">
          <p class="text-muted">Ilustrasi product iteration</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-lg p-4">
            <h3 class="text-center mb-4">Kritik dan Saran</h3>
            <form>
              <div class="form-group mb-3">
                <textarea class="form-control form-control-lg shadow-sm" rows="5" placeholder="Tulis kritik atau saran Anda di sini..."></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm">Ajukan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

 