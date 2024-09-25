<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peminjaman - Tabel Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#laporanModal">laporan</a>
          </li>
        </ul>
      </div>

      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          Hallo, User
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?= base_url('profile/edit'); ?>">Edit Profile</a></li>
          <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="modal fade" id="laporanModal" tabindex="-1" aria-labelledby="laporanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="laporanModalLabel">Laporan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('laporan/simpan_perubahan'); ?>" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Peminjam</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="barang" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="barang" name="barang" required>
            </div>
            <div class="mb-3">
              <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
              <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>
            <div class="mb-3">
              <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
              <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
            </div>
            <div class="mb-3">
              <label for="tgl_dikembalikan" class="form-label">Tanggal Dikembalikan</label>
              <input type="date" class="form-control" id="tgl_dikembalikan" name="tgl_dikembalikan" required>
            </div>
            <div class="mb-3">
              <label for="bukti_kembali" class="form-label">Foto Bukti Kembali</label>
              <input type="file" class="form-control" id="bukti_kembali" name="bukti_kembali" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary w-50">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
