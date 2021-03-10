

    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
 
      <div class="container"><img height="70px" src="<?= base_url('assets/img/core-img/logo.png');?>" alt="">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
            <div class="form-group text-left mb-4"><span>NIK</span>
              <label for="username"><i class="lni-book"></i></label>
              <input class="form-control" name="nik" id="username" type="text" placeholder="Enter NIK...">
            </div>
            <div class="form-group text-left mb-4"><span>Username</span>
              <label for="username"><i class="lni-user"></i></label>
              <input class="form-control" name="username" id="username" type="text" placeholder="Enter username...">
            </div>
            <div class="form-group text-left mb-4"><span>Password</span>
              <label for="password"><i class="lni-lock"></i></label>
              <input class="form-control" name="password" id="password" type="password" placeholder="Enter Password....">
            </div>
            <button class="btn btn-success btn-lg w-100">Login</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1" href="<?= site_url('forget'); ?>">Lupa Kata Sandi?</a>
          <p class="text-white mb-0">Belum Mempunyai Akun?<a class="ml-2" href="<?= site_url('register'); ?>">Register</a></p>
          <br>
            
      </div>
    </div>

    <?php if ($this->session->flashdata('failed')): ?>
        <script>
  Swal.fire({
    icon: 'error',
    title: 'Login Gagal!',
    text: 'Username atau Password Salah!',
    showConfirmButton: false,
    timer: 2560
})
</script>
         
        <?php endif; ?>

           <?php if ($this->session->flashdata('success')): ?>
        <script>
  Swal.fire({
    icon: 'success',
    title: 'Pendaftaran Berhasil!',
    text: 'Silahkan login untuk menggunakan akun anda!',
    showConfirmButton: false,
    timer: 2500
})
</script>
         
        <?php endif; ?>

        
    