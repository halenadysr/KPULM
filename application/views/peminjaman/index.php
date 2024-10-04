  <div class="container mt-4">
    <h2 class="text-center">Peminjaman</h2>
    <p class="text-center">Bukti transaksi peminjaman asset ICT anda</p>

    <div class="container my-4">
        <!-- Search Form -->
        <form action="" method="post">
        <div class="d-flex justify-content-start align-items-center mb-4">
            <div class="input-group w-25">
                <input type="text" name="keyword" class="form-control" id="search-btn" placeholder="Cari">
                <button class="input-group-text" id="search-btn"><i class="fas fa-search"></i></button>
            </div>
        </div>
        </form>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <div class="row justify-content-between" id="card-container">
        </div>

    </div>

    <div class="table-responsive">
      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Merek</th>
            <th>Tgl. Pinjam</th>
            <th>Tgl. Kembali</th>
            <th>Status Transaksi</th>
            <th>Status Pengembalian</th>
            <th>Tgl Pengembalian</th>
            <th>Foto Bukti Pinjam</th>
            <th>Foto Bukti Kembali</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($transaksi as $tr) : ?>
          <tr>
              <td><?= $no++ ?></td>
              <td><?= $tr->nama_barang ?></td>
              <td><?= $tr->merek ?></td>
              <td><?= $tr->tgl_pinjam ?></td>
              <td><?= $tr->tgl_kembali ?></td>
              <td><?= $tr->status_pinjam ?></td>
              <td><?= $tr->status_pengembalian ?></td>
              <td><?= $tr->tgl_pengembalian ?></td>
              <td><?= $tr->foto_pinjam ?></td>
              <td><?= $tr->foto_kembali ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="pagination text-center justify-content-center">
      <a href="#">&lt; Sebelumnya</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">Selanjutnya &gt;</a>
    </div>
  </div>