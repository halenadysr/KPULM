<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>"> <!-- Menggunakan CSS yang sama dengan login -->
        
</head>
<body>

<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-md-6 d-flex justify-content-center align-items-center login-section">
            <div class="login-box">
                <h1>Registrasi</h1>

                <form action="<?php echo base_url('registrasi/getUser'); ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username Anda" required>
                    </div>
                    <small class="text-danger mt-3"><?= form_error('username'); ?></small>              

                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda" required>
                        </div>
                    </div>
                    <small class="text-danger"><?= form_error('password'); ?></small>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Konfirmasi Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password2" placeholder="Konfirmasi Kata Sandi Anda" required>
                        </div>
                    </div>
                    <small class="text-danger"><?= form_error('password2'); ?></small>                             

                    <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                </form>
                <p class="register-link">Sudah punya akun? <a href="<?php echo site_url('Login'); ?>">Login disini.</a></p>
            </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center illustration-section">
            <div class="illustration-box">
                <img src="<?php echo base_url('assets/images/illustration.png'); ?>" alt="Ilustrasi" class="img-fluid">
            </div>
        </div>
    </div>
</div>

</body>
</html>
