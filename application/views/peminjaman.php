<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peminjaman - Tabel Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/peminjaman.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>"> <!-- Ini untuk navbar -->

</head>
<body>

<?php include 'navbar.php'; ?>

  <div class="container mt-4">
    <h2 class="text-center">Peminjaman</h2>
    <p class="text-center">Bukti transaksi peminjaman asset ICT anda</p>

    <div class="container my-4">
        <div class="d-flex justify-content-start align-items-center mb-4">
            <div class="input-group w-25">
                <input type="text" id="search-input" class="form-control" placeholder="Search">
                <span class="input-group-text" id="search-btn"><i class="fas fa-search"></i></span>
            </div>
        </div>

        <div class="row justify-content-between" id="card-container">
        </div>

    </div>

    <div class="table-responsive">
      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Peminjam</th>
            <th>Nama Barang</th>
            <th>Tgl. Pinjam</th>
            <th>Estimasi Kembali</th>
            <th>Tgl. Kembali</th>
            <th>Foto Bukti Pinjam</th>
            <th>Foto Bukti Kembali</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($peminjaman as $row): ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['tanggal_peminjam']; ?></td>
              <td><?= $row['nama_barang']; ?></td>
              <td><?= $row['tgl_pinjam']; ?></td>
              <td><?= $row['estimasi_kembali']; ?></td>
              <td><?= $row['tgl_kembali']; ?></td>
              <td><i class="fa fa-eye"></i></td>
              <td><i class="fa fa-eye"></i></td>
              <td>-</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="pagination text-center">
      <a href="#">&lt; Sebelumnya</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">Selanjutnya &gt;</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
