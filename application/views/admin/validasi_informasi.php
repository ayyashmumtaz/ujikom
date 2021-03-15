<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Verifikasi informasi</h4>
                  <p class="card-category">Selesaikan segera permasalahan masyarakat!</p>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">ID informasi</label>
                          <input type="text" class="form-control" value="<?= $data->id_informasi;?>" readonly="">
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">NIK Pelapor</label>
                          <input type="text" class="form-control"  value="<?= $data->nik;?>" readonly="">
                        </div>
                      </div>
                    
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Tanggal informasi</label>
                          <input type="datetime" class="form-control"  value="<?= $data->waktu_informasi;?>" readonly="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Permintaan Informasi</label>
                          <input type="text" class="form-control"  value="<?= $data->informasi;?>" readonly="">
                        </div>
                      </div>
                      
                 </div>

                    <form action="<?= site_url('admin/add_informasi');?>" method="post">
                   <input type="hidden" name="id_informasi" value="<?= $data->id_informasi;?>">
                   <input type="hidden" name="id_petugas" value="<?= $this->session->userdata('id_petugas');?>">
                   <input type="hidden" name="status" value="proses">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tanggapan</label>
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating"> </label>
                            <textarea class="form-control" rows="5" name="jawaban"></textarea>
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
          </div>
        </div>
      </div>