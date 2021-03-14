<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaduMas Administrator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/animsition/css/animsition.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/daterangepicker/daterangepicker.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/util.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/main.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="">
          <br>
          <br>
          <br>
          <center>
          <img height="100px" src="<?= base_url('assets/img/core-img/logo.png');?>">
          </center>
          <span class="login100-form-title-1">
            Sign In
          </span>
        </div>

        <form class="login100-form validate-form" action="<?php echo site_url('logadmin/aksi_login'); ?>" method="post">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="flex-sb-m w-full p-b-30">
            

            <div>
              <a href="#" class="txt1">
                Forgot Password?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/vendor/animsition/js/animsition.min.js'); ?>"></script>
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/vendor/bootstrap/js/popper.js'); ?>"></script>
  <script src="<?= base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/vendor/daterangepicker/moment.min.js'); ?>"></script>
  <script src="<?= base_url('assets/login/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/vendor/countdowntime/countdowntime.js'); ?>"></script>
<!--===============================================================================================-->
  <script src="<?= base_url('assets/login/js/main.js'); ?>"></script>
<?php if ($this->session->flashdata('gagal')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Login Gagal!',
      text: 'Username atau Password Salah!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>

<?php endif; ?>

<?php if ($this->session->flashdata('failed')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Login Gagal!',
      text: 'Username atau Password Salah!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>

<?php endif; ?>
</body>
</html>