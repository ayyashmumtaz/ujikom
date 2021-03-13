
      <!-- End Navbar -->
      <div class="content">
        <?php if ($this->session->flashdata('success-login')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: 'Selamat Datang di Genjapa Admin!',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>
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
                    <i class="material-icons">store</i>
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
                    <i class="material-icons">perm_contact_calendar</i>
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
                    <i class="material-icons">perm_contact_calendar</i>
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
          </div>

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Laporan Baru</h4>
                  <p class="card-category">Laporan Baru Pada Bulan Ini</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Nama Pelapor</th>
                      <th>Judul Laporan</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
               
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
