
	<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="container">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <form action="<?= site_url('Laporan/input_informasi');?>" class="form-user" method="post" enctype="multipart/form-data">
            <input type="hidden" name="nik" value="<?= $this->session->userdata('nik');?>">
              <div class="form-group text-left mb-4"><span>Jenis Informasi</span>
              <label for="username"><i class="lni-postcard"></i></label>
              <select class="form-control" type="text" name="kategori_informasi" id="form">
                <option selected disabled="">== Wajib Dipilih ==</option>
                <option value="kesehatan">Kesehatan</option>
                <option value="keamanan">Keamanan</option>
                <option value="pendidikan">Pendidikan</option>
                <option value="publik">Publik</option>
              </select>
            </div>
            <div class="form-group text-left mb-4"><span>Informasi apa yang anda ingin ketahui?</span>
              <label for="username"><i class="lni-library"></i></label>
              <textarea class="form-control" type="text" name="informasi" placeholder="" required=""></textarea>
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
      title: 'Terimakasih telah melaporkan!',
      text: 'Data Laporan Berhasil Disubmit, silahkan tunggu tanggapan petugas kami dalam 2 x 24 Jam',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>