<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/edit_profile.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
</head>
<body>

    <?php include 'navbar.php'; ?>


<div class="modal fade" id="transaksiSelesaiModal" tabindex="-1" aria-labelledby="transaksiSelesaiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaksiSelesaiModalLabel">Data Peminjam</h5>
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

    <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="gender" class="form-label">Nama Peminmjam</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="">
                </div>
                <div class="col-md-5">
                    <label for="unit" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="barang" name="barang" value="">
                </div>
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="gender" class="form-label">Tanggal Pinjam</label>
                    <input type="text" class="form-control" id="tgl p" name="tgl" value="">
                </div>
                <div class="col-md-5">
                    <label for="unit" class="form-label">Tanggal Kembali</label>
                    <input type="text" class="form-control" id="tgl k" name="tgl k" value="">
                </div>
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="phone" class="form-label">Tanggal Dikembalikan Oleh Peminjam</label>
                    <input type="text" class="form-control" id="" name="kembali" value="">
                </div>
                <div class="col-md-5">
                    <label for="nip" class="form-label">Foto Bukti Kembali</label>
                    <input type="text" class="form-control" id="bukti" name="bukti" value="">
                </div>
            </div>

            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
