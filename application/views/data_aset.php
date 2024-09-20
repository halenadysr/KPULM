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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/data_aset.css'); ?>">

  <!-- Load Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

    <!-- Konten Halaman -->
    <div class="container mt-4">
    <h2 class="text-center mb-4">Data Aset</h2>
    
    <!-- Full-width solution text -->
    <div class="full-width-text">
      <p class="text-center">Daftar Aset ICT Tersedia untuk Peminjaman</p>
    </div>

        <!-- Filter and Search Section -->
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="btn-group" role="group" aria-label="Filter Buttons">
                <button type="button" class="btn btn-outline-dark active" id="btn-paling-dipinjam">Paling banyak dipinjam</button>
                <button type="button" class="btn btn-outline-secondary" id="btn-semua">Semua</button>
            </div>
            <div class="input-group w-25">
    <input type="text" id="search-input" class="form-control" placeholder="Search">
    <span class="input-group-text" id="search-btn"><i class="fas fa-search"></i></span>
</div>

        </div>

        <!-- Data Aset Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4" id="card-container">
            <!-- Cards will be dynamically rendered here -->
        </div>
    </div>

    <!-- Modal for Ajukan -->
    <div class="modal fade" id="ajukanModal" tabindex="-1" aria-labelledby="ajukanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="ajukanModalLabel">Ajukan Peminjaman Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <!-- Modern Illustration for Modal -->
                    <img src="https://via.placeholder.com/150" alt="Illustration" class="mb-4">
                    <p class="lead">Apakah Anda yakin ingin mengajukan peminjaman barang ini?</p>
                    <button type="button" class="btn btn-success btn-lg me-2">Ajukan</button>
                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Custom Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const btnPalingDipinjam = document.getElementById('btn-paling-dipinjam');
        const btnSemua = document.getElementById('btn-semua');
        const cardContainer = document.getElementById('card-container');
        const searchBtn = document.getElementById('search-btn');
        const searchInput = document.getElementById('search-input');

        // Sample data for assets (you can fetch actual data from backend)
        const assets = Array.from({ length: 43 }, (_, i) => ({ id: i + 1, name: `Nama Data Aset ${i + 1}` }));

        // Function to render cards based on search results
        function renderCards(filteredAssets) {
            cardContainer.innerHTML = ''; // Clear the card container
            filteredAssets.forEach(asset => {
                cardContainer.innerHTML += `
                    <div class="col-md-3">
                        <div class="asset-card">
                            <img src="https://via.placeholder.com/300" alt="Asset Image">
                            <h5>${asset.name}</h5>
                            <button class="btn btn-primary btn-ajukan" data-bs-toggle="modal" data-bs-target="#ajukanModal">Ajukan</button>
                        </div>
                    </div>`;
            });
        }

        // Event listener for search button
        searchBtn.addEventListener('click', function() {
            const query = searchInput.value.toLowerCase();
            const filteredAssets = assets.filter(asset => asset.name.toLowerCase().includes(query));
            renderCards(filteredAssets);
        });

        // Event listener for "Paling banyak dipinjam" button
        btnPalingDipinjam.addEventListener('click', function() {
            renderCards(assets.slice(0, 8)); // Display only 8 assets
            btnPalingDipinjam.classList.add('active');
            btnSemua.classList.remove('active');
        });

        // Event listener for "Semua" button
        btnSemua.addEventListener('click', function() {
            renderCards(assets); // Display all 43 assets
            btnSemua.classList.add('active');
            btnPalingDipinjam.classList.remove('active');
        });

        // Initial render for default view
        renderCards(assets.slice(0, 8)); // Display the first 8 assets by default
    </script>
</body>

</html>
