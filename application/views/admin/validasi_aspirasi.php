<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Verifikasi Pengaduan</h4>
                  <p class="card-category">Selesaikan segera permasalahan masyarakat!</p>
                </div>
                <div class="card-body">
                  <?php foreach($data as $adu) : ?>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">ID Pengaduan</label>
                          <input type="text" class="form-control" value="<?= $adu->id_pengaduan;?>" readonly="">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">NIK Pelapor</label>
                          <input type="text" class="form-control" value="<?= $adu->nik;?>" readonly="">
                        </div>
                      </div>
                    
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Tanggal Pengaduan</label>
                          <input type="datetime" class="form-control" value="<?= $adu->tgl_pengaduan;?>" readonly="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Judul Pengaduan</label>
                          <input type="text" class="form-control" value="<?= $adu->judul_pengaduan;?>" readonly="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="bmd-label-floating">Foto / Lampiran : </label> <a class="btn btn-primary" href="<?= base_url('assets/img/laporan/'). $adu->foto;?>" download="<?= $adu->foto;?>" target="_blank">Download Data Lampiran</a>
                        <div class="form-group bmd-form-group">
                     </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Isi Laporan / Pengaduan</label>
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating"> </label>
                            <textarea class="form-control" rows="5" readonly="" ><?= $adu->isi_laporan;?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form action="<?= site_url('admin/add_tanggapan');?>" method="post">
                   <input type="hidden" name="id_pengaduan" value="<?= $adu->id_pengaduan;?>">
                   <input type="hidden" name="id_petugas" value="<?= $this->session->userdata('id_petugas');?>">
                   <input type="hidden" name="status" value="selesai">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tanggapan</label>
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating"> </label>
                            <textarea class="form-control" rows="5" name="tanggapan"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Tanggapan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           <?php endforeach;?>
          </div>
        </div>
      </div>