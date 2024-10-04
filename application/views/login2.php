<!doctype html>
<html?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <title>Login</title>

</head>

<body>

<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-md-6 d-flex justify-content-center align-items-center login-section">
            <div class="login-box">
                <h1>Selamat Datang <br>di Asset ICT</h1>

                <form action="<?php echo base_url('login/auth'); ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required>
                            <!-- <span class="input-group-text toggle-password" onclick="togglePassword()"></span> -->
                        </div>
                    </div>

                    <?php if ($this->session->flashdata('error')): ?>
                                <small class="text-danger mt-3">
                                    <?= $this->session->flashdata('error'); ?>
                                </small>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary" name="login">Masuk</button>
                </form>
                <p class="register-link">Belum punya akun? <a href="<?php echo site_url('Registrasi'); ?>">Registrasi Disini.</a></p>
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