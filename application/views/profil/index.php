    <div class="container mt-5">
        
        <div class="mb-3">
            <a href="<?= base_url('dashboard/index'); ?>" class="btn btn-secondary">Kembali</a>
        </div>

        <h3 class="text-center" id="title-profil">Edit Profil</h3>
        <form id="editProfileForm" action="<?= base_url('profil/update') ?>" method="POST">
            <div class="row mb-3 justify-content-center">
                <label for="name" class="form-label text-center">Nama Lengkap</label>
                <input type="text" class="form-control forms w-50 text-center" id="name" name="name" value="<?= $profil->nama; ?>">
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="unit" class="form-label">Unit</label>
                    <select class="form-select" id="unit" name="unit">
                        <option value="" disabled selected>Pilih Unit</option>
                        <?php foreach ($units as $u): ?>
                            <option value="<?= $u->nama_unit; ?>" <?= ($profil->unit == $u->nama_unit) ? 'selected' : ''; ?>>
                                <?= $u->nama_unit; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control forms" id="nip" name="nip" value="<?= $profil->nip; ?>">
                </div>
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                        <option value="Laki-laki" <?= ($profil->jk_user == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?= ($profil->jk_user == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="phone" class="form-label">No. HP</label>
                    <input type="text" class="form-control forms" id="phone" name="phone" value="<?= $profil->no_hp; ?>">
                </div>
            </div>

            <!-- Buttons -->
            <div class="row justify-content-center">
                <button type="button" class="btn btn-secondary w-25 mb-3" id="resetFormBtn">Jangan Simpan</button>
                <p class="text-center mb-3">Atau</p>
                <button type="button" class="btn btn-primary w-25" id="showConfirmSaveModal">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <!-- Modal Konfirmasi Simpan Perubahan -->
    <div class="modal fade" id="confirmSaveModal" tabindex="-1" aria-labelledby="confirmSaveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmSaveModalLabel">Konfirmasi Simpan Perubahan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menyimpan perubahan?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-secondary" class="btn" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary" id="confirmSaveBtn">Ya, Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success text-center" id="successAlert" role="alert">
        <img src="<?php echo base_url('assets/images/logo.svg'); ?>"  style="width: 100px; height: auto; margin-bottom: 10px;">
        <?= $this->session->flashdata('success'); ?>
    </div>
    <?php endif; ?>

    <script>
        document.getElementById('resetFormBtn').addEventListener('click', function() {
            window.location.href = "<?= base_url('profil/edit') ?>";
        });

        document.getElementById('showConfirmSaveModal').addEventListener('click', function() {
            var confirmSaveModal = new bootstrap.Modal(document.getElementById('confirmSaveModal'));
            confirmSaveModal.show();
        });

        document.getElementById('confirmSaveBtn').addEventListener('click', function() {
            document.getElementById('editProfileForm').submit();
        });
    </script>
