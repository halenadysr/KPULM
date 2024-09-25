<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Asset ICT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css'); ?>">
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                <h2 class="mb-4">Daftar Sekarang</h2>
                <form id="registerForm" action="<?php echo base_url('auth/register_process'); ?>" method="POST" class="w-75">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </form>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <img src="<?php echo base_url('assets/images/illustration.jpg'); ?>" alt="Ilustrasi" class="img-fluid">
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function (event) {
            var username = document.getElementById('username').value;
            if (username.includes('@')) {
                event.preventDefault();
                alert("Nama tidak boleh mengandung simbol '@'. Silakan hapus '@' dari username Anda.");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>