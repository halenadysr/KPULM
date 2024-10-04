
<!-- Modal Form Peminjaman -->
<div class="modal fade" id="transaksiSelesaiModal" tabindex="-1" aria-labelledby="transaksiSelesaiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaksiSelesaiModalLabel">Form Transaksi Peminjaman</h5>
                <button type="button" id="btn-form" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('peminjaman/tambah_transaksi'); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control forms" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control forms" id="barang" name="barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                        <input type="date" class="form-control forms" id="tgl_pinjam" name="tgl_pinjam" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                        <input type="date" class="form-control forms" id="tgl_kembali" name="tgl_kembali" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_dikembalikan" class="form-label">Tanggal Dikembalikan</label>
                        <input type="date" class="form-control forms" id="tgl_dikembalikan" name="tgl_dikembalikan" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_kembali" class="form-label">Foto Bukti Kembali</label>
                        <input type="file" class="form-control forms" id="bukti_kembali" name="bukti_kembali" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn w-50" id="btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        <div class="card-header mb-3 text-center">
            <h3>Form Transaksi Peminjaman</h3>
        </div>
        <?php foreach($detail as $dt) :?>
        <form action="<?php echo base_url('peminjaman/tambah_transaksi_aksi') ?>" method="POST">
        <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="gender" class="form-label">Nama Peminjam</label>
                    <input type="text" class="form-control forms" id="nama" name="nama" value="<?= $dt->$nama?>">
                </div>
                <div class="col-md-5">
                    <label for="unit" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control forms" id="barang" name="barang" value="">
                </div>
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="gender" class="form-label">Tanggal Pinjam</label>
                    <input type="text" class="form-control forms" id="tgl p" name="tgl" value="">
                </div>
                <div class="col-md-5">
                    <label for="unit" class="form-label">Tanggal Kembali</label>
                    <input type="text" class="form-control forms" id="tgl k" name="tgl k" value="">
                </div>
            </div>

            <div class="row mb-3 justify-content-between">
                <div class="col-md-5">
                    <label for="phone" class="form-label">Tanggal Dikembalikan Oleh Peminjam</label>
                    <input type="text" class="form-control forms" id="" name="kembali" value="">
                </div>
                <div class="col-md-5">
                    <label for="nip" class="form-label">Foto Bukti Kembali</label>
                    <input type="text" class="form-control forms" id="bukti" name="bukti" value="">
                </div>
            </div>

            <div class="row justify-content-center">
                <button type="submit" class="btn w-25" id="btn-primary">Simpan Perubahan</button>
            </div>
        </form>
        <?php endforeach; ?>
            
