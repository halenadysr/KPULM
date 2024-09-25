<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Kata Sandi - Asset ICT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>"> <!-- Menggunakan CSS yang sama dengan login -->
        
</head>
<body>

<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-md-6 d-flex justify-content-center align-items-center login-section">
            <div class="login-box">
                <h1>Daftarkan Diri Anda Sekarang!</h1>

                <form action="<?php echo base_url('auth/reset_password_process'); ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Baru" required>
                            <span class="input-group-text toggle-password" onclick="togglePassword()"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center align-items-center illustration-section">
            <div class="illustration-box">
                <img src="<?php echo base_url('assets/images/illustration.png'); ?>" alt="Ilustrasi" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById('password');
        var passwordType = passwordField.getAttribute('type');
        if (passwordType === 'password') {
            passwordField.setAttribute('type', 'text');
        } else {
            passwordField.setAttribute('type', 'password');
        }
    }
</script>

</body>
</html>
