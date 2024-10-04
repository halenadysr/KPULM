  <div class="container mt-4">
      <h2 class="text-center mb-4">Asset apa yang ingin Anda pinjam?</h2>
      
      <!-- Full-width solution text -->
      <div class="full-width-text">
        <p class="text-center">Solusi inti yang mencakup seluruh peminjaman aset. Semuanya dalam satu platform</p>
      </div>
    
      <!-- Statistics Cards -->
      <div class="container my-7">
      <div class="row justify-content-between d-flex align-items-stretch">
          <div class="col-md-3 mb-3">
              <div class="card card-stats card-blue h-100">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <i class="fas fa-camera fa-2x"></i>
                      <div class="ml-2">
                          <h5 class="card-title mb-0">Jumlah Aset</h5>
                          <p class="card-text text-white"><?= isset($jumlah_aset) ? $jumlah_aset : 0; ?></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
              <div class="card card-stats card-gray h-100">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <i class="fas fa-paper-plane fa-2x"></i>
                      <div class="ml-2">
                          <h5 class="card-title mb-0">Jumlah Diajukan</h5>
                          <p class="card-text text-white">43</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
              <div class="card card-stats card-red h-100">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <i class="fas fa-users fa-2x"></i>
                      <div class="ml-2">
                          <h5 class="card-title mb-0">Jumlah Peminjaman</h5>
                          <p class="card-text text-white">43</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 mb-3">
              <div class="card card-stats card-purple h-100">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <i class="fas fa-check-circle fa-2x"></i>
                      <div class="ml-2">
                          <h5 class="card-title mb-0">Jumlah Selesai</h5>
                          <p class="card-text text-white">43</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($aset as $a) : ?>
              <div class="col-md-3 mb-3">
                <div class="card asset-card p-4 bg-light rounded">
                  <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url().'assets/images/'.$a->gambar ?>" class="img-fluid rounded mb-3" alt="Asset Image">
                  </div>
                  <h5><?= $a->nama ?></h5>
                  <small><?= $a->merek ?></small>
                  <div class="justify-content-between mt-3">
                    <button class="btn btn-sm btn-detail" data-bs-toggle="modal" data-bs-target="#detailModal<?= $a->id_barang ?>">Detail</button>
                    <?php
                      if ($a->status == "1") {
                        echo '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajukanModal' . $a->id_barang . '">Pinjam</button>';
                      } else {
                        echo '<button type="button" class="btn btn-disable">Tidak Tersedia</button>';
                      }
                      ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        <!-- Modal Detail -->
      <?php foreach ($aset as $a) : ?>
        <div class="modal fade" id="detailModal<?= $a->id_barang ?>" tabindex="-1" aria-labelledby="detailModalLabel<?= $a->id_barang ?>" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel<?= $a->id_barang ?>">Detail Aset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img id="modalImage<?= $a->id_barang ?>" src="<?php echo base_url().'assets/images/'.$a->gambar ?>" class="img-fluid rounded mb-3" alt="Asset Image">
                <p>Nama: <?= $a->nama ?></p>
                <p>Merek: <?= $a->merek ?></p>
                <p>Warna: <?= $a->warna ?></p>
                <p>Tahun: <?= $a->tahun ?></p>
                <p class="justify-content-center">Status: <?php 
                            if ($a->status == "1") {
                              echo '<p>Tersedia</p>';
                            } else {
                              echo '<p>Tidak Tersedia</p>';
                            } ?>
              </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Modal for Ajukan -->
      <?php foreach ($aset as $a) : ?>
        <div class="modal fade" id="ajukanModal<?= $a->id_barang ?>" tabindex="-1" aria-labelledby="ajukanModalLabel<?= $a->id_barang ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="ajukanModalLabel<?= $a->id_barang ?>">Ajukan Peminjaman Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage<?= $a->id_barang ?>" src="<?php echo base_url().'assets/images/'.$a->gambar ?>" alt="Illustration" class="img-fluid rounded mb-4">
                        <p class="lead">Apakah Anda yakin ingin mengajukan peminjaman barang ini?</p>
                        <button type="button" class="btn btn-success btn-lg me-2 btn-pinjam " data-bs-toggle="modal" data-bs-target="#formModal" 
                        data-nama="<?= $a->nama; ?>" data-id="<?= $a->id_barang; ?>">Ajukan</button>
                        <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>

      <div class="text-center link-section d-flex justify-content-center">
        Cek aset lainnya? <a href="<?= base_url('asset/index'); ?>" class="ms-1"><span>klik disini</span></a>
      </div>

    <!-- Modal form Pinjam -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="formModalLabel">Form Peminjaman</h5>
                    <button type="button" class="btn-close" id="closeFormBtn" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php if (empty($profil)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Silakan mengisi data profil terlebih dahulu. <a href="<?= base_url('profil/edit'); ?>" class="ms-1 link-section"><span>Isi data profil</span></a>
                    </div>
                <?php endif; ?>
                    <form id="peminjamanForm" action="<?php echo base_url('peminjaman/simpan_perubahan'); ?>" method="post">
                        <input type="hidden" id="id_user" name="id_barang" value="<?= $profil->id_user; ?>">
                        <input type="hidden" id="id_barang" name="id_barang">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $profil->nama; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="barang" name="barang" readonly>
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
                            <label for="bukti_pinjam" class="form-label">Foto Bukti Pinjam</label>
                            <input type="file" class="form-control" id="bukti_pinjam" name="bukti_pinjam">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50" id="saveFormBtn">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
      const pinjamButtons = document.querySelectorAll('.btn-pinjam');
    
    // Tambahkan event listener untuk setiap tombol
    pinjamButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Ambil nilai dari atribut data
            const namaBarang = this.getAttribute('data-nama');
            const idBarang = this.getAttribute('data-id');
            
            // Isi form modal dengan data yang diambil
            document.getElementById('barang').value = namaBarang;
            document.getElementById('id_barang').value = idBarang; // id_barang hidden field
        });
    });

    closeFormBtn.addEventListener('click', function () {
            const formModal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
            formModal.hide();
            window.location.href = "<?php echo base_url('dashboard'); ?>";
        });
    </script>