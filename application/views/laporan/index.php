<div class="container mt-4">
  <h2 class="text-center">Laporan</h2>
  <p class="text-center">Laporan peminjaman asset ICT anda</p>

  <form method="post" action="<?= base_url('laporan/filter'); ?>" class="filter-form mb-4">
    <div class="form-group">
      <label for="start_date">Dari Tanggal :</label>
      <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="form-group">
      <label for="end_date">Sampai Tanggal:</label>
      <input type="date" class="form-control" id="end_date" name="end_date" required>
    </div>
    <div class="filter-buttons">
      <button type="submit" class="btn btn-primary">Cari</button>
      <a href="<?= base_url('laporan/cetak_pdf'); ?>" class="btn btn-warning">Cetak PDF</a>
    </div>
  </form>

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
        <!-- <?php if (!empty($laporan)): ?>
          <?php foreach ($laporan as $index => $row): ?>
            <tr>
              <td><?= $index + 1; ?></td>
              <td><?= $row['Tanggal']; ?></td>
              <td><?= $row['Nama Barang']; ?></td>
              <td><?= $row['Tgl. Pinjam']; ?></td>
              <td><?= $row['Tgl. Kembali']; ?></td>
              <td><?= $row['Tgl. Dikembalikan']; ?></td>
              <td><i class="fa fa-eye"></i></td>
              <td><i class="fa fa-eye"></i></td>
              <td>-</td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="9">Data tidak ditemukan.</td>
          </tr>
        <?php endif; ?> -->
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
