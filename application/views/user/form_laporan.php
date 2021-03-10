
	<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <!-- Background Shape-->
      <div class="container">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <form action="<?= site_url('Laporan/input_data_register');?>" class="form-user" method="post">
            <div class="form-group text-left mb-4"><span>ID Pengaduan</span>
              <label for="username"><i class="lni-user"></i></label>
              <input class="form-control" type="text" name="nik" value="<?= uniqid();?>" readonly>
            </div>
              <div class="form-group text-left mb-4"><span>NIK</span>
              <label for="username"><i class="lni-postcard"></i></label>
              <input class="form-control" type="text" name="nik" id="form" value="<?= $this->session->userdata('nik');?>" readonly>
            </div>
            <div class="form-group text-left mb-4"><span>Isi Laporan *</span>
              <label for="username"><i class="lni-library"></i></label>
              <textarea class="form-control" type="text" name="isi_laporan" placeholder="" required=""></textarea>
            </div>
            <div class="form-group text-left mb-4"><span>Bukti / Foto Laporan</span>
              <input class="form-control-file" type="file" name="foto" required="">
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