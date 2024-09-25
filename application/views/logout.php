<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .modal-body h3 {
            font-size: 18px; 
        }
        .logout-box img {
            max-width: 100px; 
            margin-bottom: 20px; 
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/logout.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navbar.css'); ?>">
</head>
<body>

<?php include 'navbar.php'; ?>

    <div class="modal fade show" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true" style="display:block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="logout-box">
                        <img src="https://via.placeholder.com/150" alt="Illustration"> 
                        <h3>Apakah yakin anda ingin keluar?</h3>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="button" class="btn btn-secondary btn-lg me-3" data-bs-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-outline-primary btn-lg" onclick="window.location.href='<?php echo base_url('auth/logout'); ?>'">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      window.onload = function() {
          var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
          logoutModal.show();
      }
    </script>

</body>
</html>
