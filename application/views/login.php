<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Asset ICT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #DAE4E5;
        }

        .login-section {
            background-color: #ffffff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-box h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
        }

        .btn-primary {
            background-color: #4A90E2;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            width: 100%;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #357ABD;
        }

        .toggle-password {
            cursor: pointer;
        }

        .input-group-text {
            cursor: pointer;
            background-color: transparent;
            border: none;
        }

        .forgot-password,
        .register-link {
            text-align: center;
            margin-top: 10px;
            display: block;
        }

        .forgot-password a,
        .register-link a {
            text-decoration: none;
            color: #4A90E2;
        }

        .forgot-password a:hover,
        .register-link a:hover {
            text-decoration: underline;
        }

        .illustration-section {
            background-color: #004c6d;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .illustration-box img {
            max-width: 400px;
            height: auto;
        }

        .alert-danger {
            color: #721c24;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-md-6 d-flex justify-content-center align-items-center login-section">
            <div class="login-box">
                <h1>Selamat Datang di Asset ICT</h1>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url('auth/login_process'); ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                            <span class="input-group-text toggle-password" onclick="togglePassword()"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </form>
                <p class="register-link">Belum punya akun? <a href="<?php echo base_url('auth/register'); ?>">Daftarkan sekarang!</a></p>
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
