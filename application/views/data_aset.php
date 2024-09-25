<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/data_aset.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        #ajukanModal .modal-dialog {
            width: 500px; 
            max-width: 100%;
        }
        #formModal .modal-dialog {
            width: 500px;
            max-width: 100%;
        }
    </style>
</head>

<body>

<?php include 'navbar.php'; ?>

    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="btn-group" role="group" aria-label="Filter Buttons">
                <button type="button" class="btn btn-outline-dark active" id="btn-paling-dipinjam">Paling banyak dipinjam</button>
                <button type="button" class="btn btn-outline-secondary" id="btn-semua">Semua</button>
            </div>
            <div class="input-group w-25">
                <input type="text" id="search-input" class="form-control" placeholder="Search">
                <span class="input-group-text" id="search-btn"><i class="fas fa-search"></i></span>
            </div>
        </div>

        <div class="row justify-content-between" id="card-container">
        </div>

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
        const btnPalingDipinjam = document.getElementById('btn-paling-dipinjam');
        const btnSemua = document.getElementById('btn-semua');
        const cardContainer = document.getElementById('card-container');
        const searchBtn = document.getElementById('search-btn');
        const searchInput = document.getElementById('search-input');
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
            window.location.href = "<?php echo base_url('data_aset'); ?>";
        });

        saveFormBtn.addEventListener('click', function () {
            window.location.href = "<?php echo base_url('peminjaman'); ?>";
        });

        const assets = Array.from({ length: 43 }, (_, i) => ({ id: i + 1, name: `Nama Data Aset ${i + 1}`, borrowed: i % 2 === 0 }));

        function renderCards(filteredAssets) {
            cardContainer.innerHTML = ''; 
            if (filteredAssets.length === 0) {
                cardContainer.innerHTML = '<p class="text-center">No assets found</p>'; 
            } else {
                filteredAssets.forEach(asset => {
                    cardContainer.innerHTML += `
                        <div class="col-md-3 mb-4">
                            <div class="asset-card">
                                <img src="https://via.placeholder.com/300" alt="Asset Image">
                                <h5>${asset.name}</h5>
                                <button class="btn btn-primary btn-ajukan" data-bs-toggle="modal" data-bs-target="#ajukanModal">Ajukan</button>
                            </div>
                        </div>`;
                });
            }
        }

        btnPalingDipinjam.addEventListener('click', function() {
            const filteredAssets = assets.filter(asset => asset.borrowed); // Filter assets that are "borrowed" most
            renderCards(filteredAssets);
            btnPalingDipinjam.classList.add('active');
            btnSemua.classList.remove('active');
        });

        btnSemua.addEventListener('click', function() {
            renderCards(assets); 
            btnSemua.classList.add('active');
            btnPalingDipinjam.classList.remove('active');
        });

        searchBtn.addEventListener('click', function() {
            const query = searchInput.value.toLowerCase();
            const filteredAssets = assets.filter(asset => asset.name.toLowerCase().includes(query));
            renderCards(filteredAssets);
        });

        renderCards(assets.slice(0, 8));
    </script>
</body>

</html>
