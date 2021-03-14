
      <!-- End Navbar -->
      <div class="content">


        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <p class="card-category">Total Seluruh Laporan</p>
                  <h3 class="card-title"><?= $total_semua;?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                 <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">checklist</i>
                  </div>
                  <p class="card-category">Total Seluruh Laporan Selesai</p>
                  <h3 class="card-title"><?= $jumlah_selesai;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">hourglass_full</i>
                  </div>
                  <p class="card-category">Laporan Sedang Diproses</p>
                  <h3 class="card-title"><?= $jumlah_proses;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">highlight_off</i>
                  </div>
                  <p class="card-category">Laporan Belum Di Proses</p>
                  <h3 class="card-title"><?= $jumlah_belum_diproses;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">help</i>
                  </div>
                  <p class="card-category">Total Permintaan Informasi</p>
                  <h3 class="card-title"><?= $total_semua_informasi;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">checklist</i>
                  </div>
                  <p class="card-category">Permintaan Informasi Clear</p>
                  <h3 class="card-title"><?= $jumlah_selesai_informasi;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">hourglass_full</i>
                  </div>
                  <p class="card-category">Total Informasi Sedang dalam Proses</p>
                  <h3 class="card-title"><?= $jumlah_proses_informasi;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">highlight_off</i>
                  </div>
                  <p class="card-category">Permintaan Informasi Belum Di Proses</p>
                  <h3 class="card-title"><?= $jumlah_belum_diproses_informasi;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Total Pengguna PaduMas</p>
                  <h3 class="card-title"><?= $total_user;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>

          </div>

           
          </div>
        </div>
      </div>
<?php if ($this->session->flashdata('berhasil')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: 'Selamat Datang di PaduMas Admin!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>

<?php endif; ?>