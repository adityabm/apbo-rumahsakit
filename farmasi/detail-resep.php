<?php
define('BASE_URL', 'http://localhost/apbo');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?php echo BASE_URL ?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo BASE_URL ?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo BASE_URL ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo BASE_URL ?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-4 py-lg-5">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Detail Resep</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="form-horizontal">
                    <div class="form-group">
                        <h3 class="control-label font-weight-bold">Kode Resep</h3>
                        <h5>#123</h5>
                    </div>
                    <div class="form-group">
                        <h3 class="control-label font-weight-bold">Nama Pasien</h3>
                        <h5>Rodiah</h5>
                    </div>

                    <fieldset>
                        <legend style="font-size:1rem" class="font-weight-bold">Detail Obat</legend>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item pl-3" style="font-size:.8rem">Parasetamol</li>
                            <li class="list-group-item pl-3" style="font-size:.8rem">Obat Batuk</li>
                            <li class="list-group-item pl-3" style="font-size:.8rem">Obat Pilek</li>
                        </ul>
                    </fieldset>
                    <div class="form-group">
                        <h3 class="control-label font-weight-bold">Total</h3>
                        <h2 class="text-center">Rp. 100.000,-</h2>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo BASE_URL ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo BASE_URL ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo BASE_URL ?>/assets/js/argon.js?v=1.0.0"></script>
</body>

</html>