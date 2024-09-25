<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
    
<body>

<?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h2 class="text-center">Apa yang ingin Anda lakukan?</h2>
        <p class="text-center">Solusi inti yang mencakup seluruh peminjaman aset. Semuanya dalam satu platform. anda</p>
    </div>

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

        <!-- Data Aset Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-3 mb-4">
                <div class="asset-card">
                    <img src="https://via.placeholder.com/300" alt="Asset Image">
                    <h5>Nama Data Aset</h5>
                    <button class="btn btn-primary btn-ajukan" data-bs-toggle="modal" data-bs-target="#ajukanModal">Ajukan</button>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="asset-card">
                    <img src="https://via.placeholder.com/300" alt="Asset Image">
                    <h5>Nama Data Aset</h5>
                    <button class="btn btn-primary btn-ajukan" data-bs-toggle="modal" data-bs-target="#ajukanModal">Ajukan</button>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="asset-card">
                    <img src="https://via.placeholder.com/300" alt="Asset Image">
                    <h5>Nama Data Aset</h5>
                    <button class="btn btn-primary btn-ajukan" data-bs-toggle="modal" data-bs-target="#ajukanModal">Ajukan</button>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="asset-card">
                    <img src="https://via.placeholder.com/300" alt="Asset Image">
                    <h5>Nama Data Aset</h5>
                    <button class="btn btn-primary btn-ajukan" data-bs-toggle="modal" data-bs-target="#ajukanModal">Ajukan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center my-4">
    <a href="<?php echo base_url('data_aset'); ?>" class="footer-link">
        Cek aset lainnya? <span>klik disini</span>
    </a>
</div>

    <div class="modal fade" id="ajukanModal" tabindex="-1" aria-labelledby="ajukanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> 
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="ajukanModalLabel">Ajukan Peminjaman Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://via.placeholder.com/150" alt="Illustration" class="mb-4">
                    <p class="lead">Apakah Anda yakin ingin mengajukan peminjaman barang ini?</p>
                    <button type="button" class="btn btn-success btn-lg me-2" id="showFormBtn">Ajukan</button>
                    <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="formModalLabel">Data Peminjam</h5>
                    <button type="button" class="btn-close" id="closeFormBtn" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="peminjamanForm" action="<?php echo base_url('laporan/simpan_perubahan'); ?>" method="post">
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
                            <input type="date" class="form-control" id="tgl_dikembalikan" name="tgl_dikembalikan">
                        </div>
                        <div class="mb-3">
                            <label for="bukti_kembali" class="form-label">Foto Bukti Kembali</label>
                            <input type="file" class="form-control" id="bukti_kembali" name="bukti_kembali">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50" id="saveFormBtn">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const showFormBtn = document.getElementById('showFormBtn');
        const closeFormBtn = document.getElementById('closeFormBtn');
        const saveFormBtn = document.getElementById('saveFormBtn');

        showFormBtn.addEventListener('click', function () {
            const ajukanModal = bootstrap.Modal.getInstance(document.getElementById('ajukanModal'));
            ajukanModal.hide();
            const formModal = new bootstrap.Modal(document.getElementById('formModal'));
            formModal.show();
        });

        closeFormBtn.addEventListener('click', function () {
            const formModal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
            formModal.hide();
            window.location.href = "<?php echo base_url('dashboard'); ?>";
        });

        saveFormBtn.addEventListener('click', function () {
            window.location.href = "<?php echo base_url('peminjaman'); ?>";
        });
    </script>
</body>
</html>
