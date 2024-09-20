<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Asset ICT</title>

  <!-- Load Bootstrap CSS (versi terbaru) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Load Google Fonts Montserrat and Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
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
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data_aset'); ?>">Data Aset</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('peminjaman'); ?>">Peminjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kritik_saran'); ?>">Kritik dan Saran</a>
            </li>
        </ul>
      </div>
      <div>
        <button class="btn btn-primary">Hallo, User</button>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
<div class="container mt-4">
    <h2 class="text-center mb-4">Apa yang ingin anda lakukan?</h2>
    
    <!-- Full-width solution text -->
    <div class="full-width-text">
      <p class="text-center">Solusi inti yang mencakup seluruh peminjaman aset. Semuanya dalam satu platform</p>
    </div>
  
    <!-- Statistics Cards -->
    <div class="container my-7">
        <div class="row justify-content-between">
            <div class="col-md-3 mb-3">
                <div class="card card-stats card-blue">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-camera fa-2x"></i>
                        <div class="ml-2">
                            <h5 class="card-title mb-0">Jumlah Aset</h5>
                            <p class="card-text">43</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-stats card-gray">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-paper-plane fa-2x"></i>
                        <div class="ml-2">
                            <h5 class="card-title mb-0">Jumlah Diajukan</h5>
                            <p class="card-text">43</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-stats card-red">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-users fa-2x"></i>
                        <div class="ml-2">
                            <h5 class="card-title mb-0">Jumlah Peminjaman</h5>
                            <p class="card-text">43</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-stats card-purple">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-check-circle fa-2x"></i>
                        <div class="ml-2">
                            <h5 class="card-title mb-0">Jumlah Selesai</h5>
                            <p class="card-text">43</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Asset Cards Section -->
    <div class="row text-center">
      <!-- Asset Card 1 -->
      <div class="col-md-3 mb-3">
        <div class="card asset-card p-4 bg-light rounded">
          <div class="d-flex justify-content-center">
            <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3" alt="Asset Image">
          </div>
          <h5>Nama Data Aset</h5>
          <button class="btn btn-outline-primary mt-2">Ajukan</button>
        </div>
      </div>

      <!-- Asset Card 2 -->
      <div class="col-md-3 mb-3">
        <div class="card asset-card p-4 bg-light rounded">
          <div class="d-flex justify-content-center">
            <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3" alt="Asset Image">
          </div>
          <h5>Nama Data Aset</h5>
          <button class="btn btn-outline-primary mt-2">Ajukan</button>
        </div>
      </div>

      <!-- Asset Card 3 -->
      <div class="col-md-3 mb-3">
        <div class="card asset-card p-4 bg-light rounded">
          <div class="d-flex justify-content-center">
            <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3" alt="Asset Image">
          </div>
          <h5>Nama Data Aset</h5>
          <button class="btn btn-outline-primary mt-2">Ajukan</button>
        </div>
      </div>

      <!-- Asset Card 4 -->
      <div class="col-md-3 mb-3">
        <div class="card asset-card p-4 bg-light rounded">
          <div class="d-flex justify-content-center">
            <img src="https://via.placeholder.com/150" class="img-fluid rounded mb-3" alt="Asset Image">
          </div>
          <h5>Nama Data Aset</h5>
          <button class="btn btn-outline-primary mt-2">Ajukan</button>
        </div>
      </div>
    </div>

    <!-- Link to more assets -->
    <div class="text-center link-section mt-4">
    <a href="#">Cek aset lainnya? <span>klik disini</span></a>
</div>

  <!-- Load Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
