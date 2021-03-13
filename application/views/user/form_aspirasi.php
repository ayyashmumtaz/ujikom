
	<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="container">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <form action="<?= site_url('Laporan/input_aspirasi');?>" class="form-user" method="post" enctype="multipart/form-data">

            <div class="form-group text-left mb-4"><span>Masukan Aspirasi Terbaik Anda</span>
              <label for="username"><i class="lni-library"></i></label>
              <textarea class="form-control" type="text" name="informasi" placeholder="" required=""></textarea>
              <small>Aspirasi anda akan ditampilkan secara publik di Ruang Publik, guna menjadi bahan intropeksi masing-masing.</small>
            </div>

            <button class="btn btn-primary btn-lg w-100 tombol-simpan" type="submit">Submit</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data">
        </div>
      </div>
    </div>
<br>	
<?php if ($this->session->flashdata('berhasil-input')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Terimakasih telah mengisi aspirasi!',
      text: 'Aspirasi anda merupakan salah satu bentuk kontribusi didalam ruang publik.',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>