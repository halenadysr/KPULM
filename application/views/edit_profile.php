<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/edit_profile.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">

    <style>
        #successAlert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            display: none; 
            max-width: 300px;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h3 class="text-center">Edit Profile</h3>
        <form id="editProfileForm" action="<?= base_url('editprofile/update') ?>" method="POST">
            <div class="row mb-3 justify-content-center">
                <label for="name" class="form-label text-center">Nama Lengkap</label>
                <input type="text" class="form-control w-50 text-center" id="name" name="name" value="Muhamad">
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="Laki laki">
                </div>
                <div class="col-md-5">
                    <label for="unit" class="form-label">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" value="Operation land">
                </div>
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="phone" class="form-label">No. HP</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="08XXXXXXXXXX">
                </div>
                <div class="col-md-5">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="123456">
                </div>
            </div>

            <!-- Buttons -->
            <div class="row justify-content-center">
                <button type="button" class="btn btn-secondary w-25 mb-3" id="resetFormBtn">Jangan Simpan</button>
                <p class="text-center">Atau</p>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary" id="confirmSaveBtn">Ya, Simpan</button>
                </div>
            </div>
        </div>
    </div>

<div class="alert alert-success text-center" id="successAlert" role="alert">
    <img src="<?php echo base_url('assets/images/logo.svg'); ?>"  style="width: 100px; height: auto; margin-bottom: 10px;">
    Profil Anda telah diperbarui!
</div>

    <script>
        var initialFormState = {
            name: document.getElementById('name').value,
            gender: document.getElementById('gender').value,
            unit: document.getElementById('unit').value,
            phone: document.getElementById('phone').value,
            nip: document.getElementById('nip').value
        };

        document.getElementById('resetFormBtn').addEventListener('click', function() {
            window.location.href = "<?= base_url('dashboard'); ?>";
        });

        document.getElementById('showConfirmSaveModal').addEventListener('click', function() {
            var confirmSaveModal = new bootstrap.Modal(document.getElementById('confirmSaveModal'));
            confirmSaveModal.show();
        });

        document.getElementById('confirmSaveBtn').addEventListener('click', function() {
            var confirmSaveModal = bootstrap.Modal.getInstance(document.getElementById('confirmSaveModal'));
            confirmSaveModal.hide();
            var successAlert = document.getElementById('successAlert');
            successAlert.style.display = 'block'; 
            setTimeout(function() {
                successAlert.style.display = 'none'; 
            }, 5000);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
