    <!-- Konten Halaman -->
    <div class="container mt-4">
        <!-- Filter and Search Section -->
        <div class="container my-4">
        <div class="full-width-text">
            <p class="text-center">Daftar Aset ICT Tersedia untuk Peminjaman</p>
        </div>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="btn-group" role="group" aria-label="Filter Buttons">
                    <button type="button" class="btn btn-outline-dark active" id="btn-paling-dipinjam">Paling banyak dipinjam</button>
                    <button type="button" class="btn btn-outline-secondary" id="btn-semua">Semua</button>
                </div>
                <!-- Search form -->
                <form action="" method="post" class="w-25">
                    <div class="input-group">
                        <input type="text" name="keyword" id="search-input" class="form-control" placeholder="Cari">
                        <button class="input-group-text" type="submit" id="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>

        <!-- Data Aset Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4" id="card-container">
          <!-- Alert jika data tidak ditemukan -->
          <?php if (empty($aset)) : ?>
              <div class="alert alert-danger" role="alert">
                  Data aset tidak ditemukan.
              </div>
          <?php endif; ?>
          <!-- Menampilkan kartu data aset -->
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
                          <?php if ($a->status == "1") : ?>
                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajukanModal<?= $a->id_barang ?>">Pinjam</button>
                          <?php else : ?>
                              <button type="button" class="btn btn-disable">Tidak Tersedia</button>
                          <?php endif; ?>
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
                  <p>Merek: <?= $a->merek ?></p>
                  <p>Warna: <?= $a->warna ?></p>
                  <p>Tahun: <?= $a->tahun ?></p>
                  <p>Status: <?php 
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
                        <button type="button" class="btn btn-success btn-lg me-2 btn-pinjam" data-bs-toggle="modal" data-bs-target="#formModal" 
                        data-nama="<?= $a->nama; ?>" data-id="<?= $a->id_barang; ?>" denda="<?= $a->denda; ?>">Ajukan</button>
                        <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

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
                    <?php else: ?>
                        <form id="peminjamanForm" action="<?php echo base_url('pinjam/tambah_pinjam'); ?>" method="post">
                            <input type="hidden" id="id_user" name="id_user" value="<?= $profil->id_user; ?>">
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
                                <label for="denda" class="form-label">Denda/Hari</label>
                                <input type="text" class="form-control" id="denda" name="denda" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-50" id="saveFormBtn">Ajukan</button>
                            </div>
                        </form>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    <script>
        const pinjamButtons = document.querySelectorAll('.btn-pinjam');
        // const btnPalingDipinjam = document.getElementById('btn-paling-dipinjam');
        // const btnSemua = document.getElementById('btn-semua');
        // const cardContainer = document.getElementById('card-container');
        // const searchBtn = document.getElementById('search-btn');
        // const searchInput = document.getElementById('search-input');

        // // Event listener for search button
        // searchBtn.addEventListener('click', function() {
        //     const query = searchInput.value.toLowerCase();
        //     const cards = document.querySelectorAll('.asset-card');
        //     cards.forEach(card => {
        //         const assetName = card.querySelector('h5').textContent.toLowerCase();
        //         if (assetName.includes(query)) {
        //             card.parentElement.style.display = 'block';
        //         } else {
        //             card.parentElement.style.display = 'none';
        //         }
        //     });
        // });

        // // Event listener for "Paling banyak dipinjam" button
        // btnPalingDipinjam.addEventListener('click', function() {
        //     btnPalingDipinjam.classList.add('active');
        //     btnSemua.classList.remove('active');
        //     // Filter logic for "Paling banyak dipinjam" can be implemented here
        // });

        // // Event listener for "Semua" button
        // btnSemua.addEventListener('click', function() {
        //     btnSemua.classList.add('active');
        //     btnPalingDipinjam.classList.remove('active');
        //     // Show all cards
        //     const cards = document.querySelectorAll('.asset-card');
        //     cards.forEach(card => {
        //         card.parentElement.style.display = 'block';
        //     });
        // });
    
        // Tambahkan event listener untuk setiap tombol
        pinjamButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Ambil nilai dari atribut data
                const namaBarang = this.getAttribute('data-nama');
                const idBarang = this.getAttribute('data-id');
                const denda = this.getAttribute('denda');
                
                // Isi form modal dengan data yang diambil
                document.getElementById('barang').value = namaBarang;
                document.getElementById('id_barang').value = idBarang; 
                document.getElementById('denda').value = denda; 
            });
        });

        document.getElementById('peminjamanForm').addEventListener('submit', function(event) {
        // Ambil nilai id_barang dari hidden input
        var idBarang = document.getElementById('id_barang').value;
        
        // Update action form dengan id_barang
        this.action = "<?php echo base_url('pinjam/tambah_pinjam/'); ?>" + idBarang;
        });

        closeFormBtn.addEventListener('click', function () {
                const formModal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
                formModal.hide();
                window.location.href = "<?php echo base_url('asset'); ?>";
         });
    </script>